<!--
    <h1>Créer un nouvel article</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Contenu :</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image :</label>
            <input type="file" name="image" accept="image/*" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
 -->

    <h1>Créer un Nouvel Article</h1>
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Contenu :</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image :</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>

