<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use DB;
class RegisterController extends BaseController
{
    
    public  function index(){
        $userType= User::all();
        return $this->sendResponse($userType, 'User register successfully.');
    }
    public function register(Request $request): JsonResponse
    {
      
        DB::beginTransaction();     
        try {
       
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'mobile' => 'required|string|min:10|max:10|unique:users,mobile',
            'email' => 'required|email|unique:users',
            'whatsapp_number'=>'required|string|min:10|max:10|unique:users,whatsapp_number',
            'dl_number'=>'required',
            'gst_number'=>'required',
            'pan_number'=>'required',
            'aadhar_number'=>'required',
            'aadhar_image_front'=> 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'aadhar_image_back'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'profile_image'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'dl_image'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'rc_number'=>'required',
            'rc_image'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'father_name'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'gender'=>'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
       
        //upload aadhar cart image front and back
        if($request->hasFile('aadhar_image_front')){
            $aadhar_image_front = $this->upload($request->file('aadhar_image_front'));
        }else{
            $aadhar_image_front ="";
        }
        if($request->hasFile('aadhar_image_back')){
            $aadhar_image_back = $this->upload($request->file('aadhar_image_back'));
        }else{
            $aadhar_image_back ="";
        }
        if($request->hasFile('dl_image')){
            $dl_image = $this->upload($request->file('dl_image'));
        }else{
            $dl_image ="";
        }
        if($request->hasFile('profile_image')){
            $profile_image = $this->upload($request->file('profile_image'));
        }else{
            $profile_image ="";
        }
        if($request->hasFile('rc_image')){
            $rc_image = $this->upload($request->file('rc_image'));
        }else{
            $rc_image ="";
        }
        if($request->hasFile('voter_id_front')){
            $voter_id_front = $this->upload($request->file('voter_id_front'));
        }else{
            $voter_id_front ="";
        }
        if($request->hasFile('voter_id_back')){
            $voter_id_back = $this->upload($request->file('voter_id_back'));
        }else{
            $voter_id_back ="";
        }

       // End uploads  
        $user =new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->whatsapp_number = $request->whatsapp_number;
        $user->gst_number = $request->gst_number;
        $user->pan_number = $request->pan_number;
        $user->father_name = $request->father_name;
        $user->address = $request->address;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->password = "password";
        $user->aadhar_number = $request->aadhar_number;
        $user->aadhar_image_front = $aadhar_image_front;
        $user->aadhar_image_back = $aadhar_image_back;
        $user->dl_number = $request->dl_number;
        $user->dl_image = $dl_image;
        $user->profile_image = $profile_image;
        $user->rc_number = $request->rc_number;
        $user->rc_image = $rc_image;
        $user->voter_id_front = $voter_id_front;
        $user->voter_id_back = $voter_id_back;
        $user->user_type_id= $request->user_type_id;
        $user->save();
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->first_name;
        $success['type_id'] = $user->user_type_id;
        $success['id'] = $user->id;
        DB::commit(); 
        return $this->sendResponse($success, 'User register successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            //if something goes wrong
            return $this->sendError('Error.', ['error'=>'Went Something Wrong!']);
        }
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
