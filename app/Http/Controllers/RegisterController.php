<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Inscription - ' . config('app.name'),
            'description' => 'Formulaire d\'inscription au site ' . config('app.name'),
        ];        

        return view('auth.register', $data);
    }

    public function register(){
        request()->validate([
            'name' => 'required|min:3|max:100|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|between:6,20',
        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        $info = "Votre inscription a bien été prise en compte.";
        // return back()->withinfo($info);
        return back()->with('info', $info);
    }
}
