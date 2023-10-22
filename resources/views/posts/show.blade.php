<!--
    <h1>Détails de l'article</h1>

    <p><strong>Titre :</strong> {{ $post->title }}</p>
    <p><strong>Contenu :</strong> {{ $post->content }}</p>

    @if ($post->image)
        <p><strong>Image :</strong></p>
        <img src="{{ asset('images/' . $post->image) }}" alt="Image de l'article" class="img-thumbnail" width="300">
    @else
        <p>Aucune image</p>
    @endif

    <a href="{{ route('posts.index') }}" class="btn btn-primary">Retour à la liste</a> -->

    <!--********************************************* <h1>Détails de l'Article</h1>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    @if ($post->image)
        <img src="{{ asset('images/' . $post->image) }}" alt="Image de l'article">
    @endif
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Retour à la liste des articles</a> -->

    <h1>Détails de l'Article</h1>
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
@if ($post->image)
    <img src="{{ asset('images/' . $post->image) }}" alt="Image de l'article">
@endif
<!-- Affichage de la liste des commentaires -->
<h3>Commentaires :</h3>
<ul>
    @foreach ($post->comments as $comment)
        <li>{{ $comment->body }}</li>
    @endforeach
</ul>

<!-- Formulaire de création de commentaires -->
<form action="{{ route('comments.store', ['postId' => $post->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="body">Ajouter un commentaire :</label>
        <textarea name="body" id="body" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter un commentaire</button>
</form>


<a href="{{ route('posts.index') }}" class="btn btn-primary">Retour à la liste des articles</a>
