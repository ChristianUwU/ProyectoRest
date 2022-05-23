<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //llamo a mi funcion create
    public function create(){
        return view('auth.register');
    }


    //funcion crear nuevo usuario
    public function store(){

        $user = User::create(request(['name','email','password']));

        auth()->login($user);
        return redirect()->to('/');

    }
}