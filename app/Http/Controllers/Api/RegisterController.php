<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\User\RegistrationRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class RegisterController extends BaseController
{

    public  function index(){
        $userType= User::all();
        return $this->sendResponse($userType, 'User register successfully.');
    }
    public function register(RegistrationRequest $request)
    {
        DB::beginTransaction();
        try {
            $validator = $request->validated();

            $validator['password'] = bcrypt(Str::random(8));

            // Handling file uploads
            $fileFields = ['aadhar_image_front', 'aadhar_image_back', 'dl_image', 'profile_image', 'rc_image', 'voter_id_front', 'voter_id_back'];
            $uploadedFiles = $this->handleFileUploads($request, $fileFields);

            $userData = array_merge($validator, $uploadedFiles);

            $user = User::create($userData);

            // $user = User::where('id', 1)->update($userData);
            DB::commit();

            $token = $user->createToken('MyApp')->plainTextToken;
            return (new UserResource($user))->additional(['token' => $token]);
        } catch (\Exception $e) {
            DB::rollback();
            // if something goes wrong
            return $this->sendError('Error.', ['error' => 'Went Something Wrong!'.$e->getMessage()]);
        }
    }


    private function handleFileUploads(Request $request, array $fileFields): array
    {
        $uploadedFiles = [];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $uploadedFiles[$field] = $this->upload($request->file($field));
            } else {
                $uploadedFiles[$field] = "";
            }
        }

        return $uploadedFiles;
    }

    //upload file
    public function upload($img){
        $path = public_path().'/images';
        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
        $images =$img->getClientOriginalName().time().'.'.$img->extension();
        $img->move(public_path('images'), $images);
        return $images;
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {
        try{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $user = Auth::user();
                $success['token'] =  $user->createToken('MyApp')->plainTextToken;
                return $this->sendResponse($success, 'User login successfully.');
            }
        }catch(\Exception $e){
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

    }


    public function logout(Request $request){
        try{
            Auth()->user()->tokens()->delete();
            $success['token'] =  "Deleted";
            return $this->sendResponse($success, 'User logout successfully.');
        }catch(\Exception $e){
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

    }
}
