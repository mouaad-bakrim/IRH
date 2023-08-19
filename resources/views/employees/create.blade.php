@extends('layouts.master')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('employees.store') }}">
            @csrf

            <label for="nom">Nom :</label>
            <input type="text" name="name" required>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" required>
            <label for="tele">Téléphone :</label>
            <input type="text" name="tele" required>
            <label for="email">Email :</label>
            <input type="email" name="email" required>
            <button type="submit">Créer</button>
        </form>
    </div>
@endsection
