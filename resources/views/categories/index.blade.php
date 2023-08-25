@foreach($categories as $categorie)
    <p>Nom : {{ $categorie->nom }}</p>
    <p>Description : {{ $categorie->description }}</p>
    <hr>
@endforeach
