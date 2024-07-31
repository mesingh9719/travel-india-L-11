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
        $users = User::query();
        $users = $this->userFilter->filter($request, $users);
        $users = $users->latest()->paginate(10);

        if ($request->ajax()){
            return response()->json([
                'view' => view('admin.users.users', compact('users'))->render(),
                'paginationHtml' => view('admin.users.pagination', compact('users'))->render(),
                'currentPage' => $users->currentPage(),
                'lastPage' => $users->lastPage(),
            ]);
        }

        return view('admin.users.index', compact('users'));
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
        //
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
        //
    }
}
