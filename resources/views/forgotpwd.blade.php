@extends('layout.main')
@section('contenu')
<div class="form-container">
    <h2>J'ai oublié mon mot de passe</h2>
    <form action="#" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Saisir votre email :</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">
        </div>
        <a href="{{Route('register')}}" class="register-link">Je n'ai pas encore de compte</a>
        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>
@endsection