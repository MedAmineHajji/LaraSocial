<!--
    <h1>Liste des articles</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset('images/' . $post->image) }}" alt="Image de l'article" class="img-thumbnail" width="100">
                        @else
                            Aucune image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Voir</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Éditer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> -->

 
    <h1>Liste des Articles</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Créer un nouvel article</a>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

