<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Titre">
    <textarea name="content" placeholder="Contenu"></textarea>
    <input type="file" name="image">
    <button type="submit">Créer un article</button>
</form>
