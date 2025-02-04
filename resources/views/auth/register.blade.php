@extends('layout.main')
@section('contenu')
<div class="form-container">
    @if(session('info'))
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <a> {{ session('info') }}</a>.
    </div>
    @endif
    <h2>{{ $title }}</h2>
    <form action="{{ Route('register.register')}}" method="POST">
        @method('POST')
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom d'utilisateur :</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Entrez votre nom d'utilisateur">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail :</label>
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Entrez votre adresse e-mail">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe :</label>
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Créez un mot de passe">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <a href="{{Route('login.index')}}" class="register-link">J'ai déjà un compte</a>
        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </div>
    </form>
</div>

@endsection