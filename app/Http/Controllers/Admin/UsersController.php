<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserFilter;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected UserFilter $userFilter;

    public function __construct(UserFilter $userFilter)
    {
        $this->userFilter = $userFilter;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('ownerEntriesPerPage', 10); // Default to 10 if not provided
        $query = User::query();
        $filter = $request->get('owner_filter');
        if ($filter) {
            $query->where(function($q) use ($filter) {
                $q->where('full_name', 'like', "%$filter%")
                  ->orWhere('mobile', 'like', "%$filter%");
            });
        }
        $owners = $query->paginate($perPage);
        if ($request->ajax()) {
            return response()->json([
                'html' => view('admin.owners.owner-list', compact('owners'))->render(),
            ]);
        }

        return view('admin.owners.index', compact('owners'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $table = 'users'; // Your table name
        $columns = Schema::getColumnListing($table);

        // Fetch column types
        $columnTypes = [];
        $columnRemoved = ['id', 'assigned_to', 'fuel_type', 'rc_image_back', 'is_verified', 'created_at', 'updated_at', 'status'];
        $columns =array_diff($columns, $columnRemoved);
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column); // Laravel 8 and later
        }

        return view('admin.owner.edit-form', compact('columns', 'columnTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id); // Find the User or throw a 404 error
        $user->delete(); // Delete the User
        return redirect()->back()->with('success', 'Owner Deleted Successfully!');
    }
}
