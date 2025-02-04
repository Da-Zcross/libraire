@extends('layout.main')
@section('contenu')
    <div class="form-container">
        <h2>Connexion</h2>
        <form action="{{Route('login.login')}}" method="POST">
            @method('POST')
            @csrf

            @if(session('erreur'))
                <div class="alert alert-dismissible alert-danger">
                    <a> {{ session('erreur') }}</a>.
                </div>
            @endif
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail :</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Entrez votre adresse e-mail">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Entrez votre mot de passe">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="remember" name="remember" value="1" class="form-check-input">
                <label for="remember" class="form-check-label">Se souvenir de moi</label>
            </div>

            <a href="{{Route('forgotpwd')}}" class="forgot-password">Mot de passe oublié</a>
            <a href="{{Route('register')}}" class="register-link">Je n'ai pas encore de compte</a>
            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
        </form>
    </div>
@endsection
