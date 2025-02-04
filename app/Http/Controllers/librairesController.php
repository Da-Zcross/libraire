<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class librairesController extends Controller
{

    public function index(){
        return view('accueil', [
        "title" => env('APP_NAME')]);
    }

    public function login(){
        return view('login');
    }

    public function forgotpwd(){
        return view('forgotpwd');
    }

    public function reinitpwd(){
        return view('reinitpwd');
    }
}
