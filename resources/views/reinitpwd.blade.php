@extends('layout.main')
    @section('contenu')
        <div class="form-container">
            <h2>Réinitialiser mon mot de passe</h2>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Saisir votre email :</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Saisir votre mot de passe :</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Créez un mot de passe">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Confirmer votre mot de passe :</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Créez un mot de passe">
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    @endsection