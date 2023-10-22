<!--
    <h1>Éditer l'article</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Contenu :</label>
            <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image actuelle :</label>
            @if ($post->image)
                <img src="{{ asset('images/' . $post->image) }}" alt="Image de l'article" class="img-thumbnail" width="300">
            @else
                Aucune image
            @endif
        </div>
        <div class="form-group">
            <label for="new_image">Nouvelle image :</label>
            <input type="file" name="new_image" accept="image/*" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
 -->

    <h1>Modifier l'Article</h1>
    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="content">Contenu :</label>
            <textarea name="content" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="new_image">Nouvelle Image :</label>
            <input type="file" name="new_image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

