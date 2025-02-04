<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Connexion - ', config('app.name'),
            'description' => 'Formulaire de connexion au site ', config('app.name'),
        ];        

        return view('auth.login', $data);
    }

    public function login(){
        request()->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],
        ]);

        // dd(request()->all());

        $remember = request()->has('remember');

        if(Auth::attempt([
            'email'=>request('email'),
            'password'=>request('password')], $remember))
        {
            // Authentification OK.
            // dd(Auth::user()->name);
            // Auth::guest(); // Invité ?
            // Auth::check(); // connecté ?
            // Auth::logout(); // Pour déconnecter l'utilisateur
            return redirect('/');
        }
        return back()->withErreur('Identifiants invalides.')->withInput();
    }
}
