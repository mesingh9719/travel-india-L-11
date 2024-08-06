<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController as Api;
class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            try {
                $response =Http::get('https://jsonplaceholder.typicode.com/todos/1');
                return $response->json();
            } catch (\Exception $e) {
                return $e->getMessage();
            }  
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
    public function store(Request $request)
    {
  
        // return Http::get('http://localhost/api/test');
        // $register = new Api();
        // $data = $register->register();
        // dd($data);
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
