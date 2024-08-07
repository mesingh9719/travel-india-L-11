<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\User\RegistrationRequest;
use App\Http\Controllers\Api\RegisterController as UserService;
use App\Http\Controllers\Frontend\RedirectResponse;
class RegistrationController extends Controller
{
    protected $userservice;

    // Dependency Injection via Constructor
    public function __construct(UserService $userservice)
    {
        $this->userservice = $userservice;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->userservice->index();
        return json_encode($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('frontend.auth.register'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $request)
    { 
        DB::beginTransaction();
        try {
            $validator = $request->validated();
            $validator['password'] = bcrypt(Str::random(8));
            // Handling file uploads
            $fileFields = ['aadhar_image_front', 'aadhar_image_back', 'dl_image', 'profile_image', 'rc_image', 'voter_id_front', 'voter_id_back'];
            $uploadedFiles = CommonHelper::handleFileUploads($request, $fileFields);

            $userData = array_merge($validator, $uploadedFiles);
            $user = User::create($userData);

            // DB::commit();
            $token = $user->createToken('MyApp')->plainTextToken;
            // return (new UserResource($user))->additional(['token' => $token]);
            return redirect()->route('register.create')->with('status', 'Item created successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            // if something goes wrong
            return redirect()->route('register.create')->with('status', 'Went Something Wrong!'.$e->getMessage());
           
        }
       

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
