<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 Joining Tables Insert Data in Bootstrap 5 Modal - Cairocoders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Liste des articles </h1>
    <div class="row">
        <div class="col-md-12">
            <h2>Article Table
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addnew">
                  <i class="bi bi-clipboard2-plus-fill"></i> Add New Article
                </button>
            </h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Gender</th>
                    <th>Position</th>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->titre}}</td>
                            <td>{{$article->contenuu}}</td>
                            <td>{{$article->gender}}</td>
                            <td>{{$article->title}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('modal')
</body>
</html>