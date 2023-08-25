<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>
    <br>
    <label for="description">Description :</label>
    <textarea name="description" required></textarea>
    <br>
    <button type="submit">Créer Catégorie</button>
</form>
