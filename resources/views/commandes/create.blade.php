<form action="{{ route('commandes.store') }}" method="POST">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>
    <br>
    <label for="description">Description :</label>
    <textarea name="description" required></textarea>
    <br>
    <label for="categorie_id">Catégorie :</label>
    <select name="categorie_id">
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Créer Commande</button>
</form>
