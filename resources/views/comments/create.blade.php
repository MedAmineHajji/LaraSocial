
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créer un commentaire</div>
                    <div class="card-body">
                        <form action="{{ route('comments.store', $post->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="body">Commentaire :</label>
                                <textarea name="body" id="body" class="form-control" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Créer le commentaire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

