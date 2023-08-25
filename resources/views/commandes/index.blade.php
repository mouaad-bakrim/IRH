@foreach($commandes as $commande)
    <p>Nom : {{ $commande->nom }}</p>
    <p>Description : {{ $commande->description }}</p>
    <p>Catégorie : {{ $commande->categorie->nom }}</p>
    <hr>
@endforeach
