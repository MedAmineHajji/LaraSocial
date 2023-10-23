<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Article</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action="{{ URL::to('save') }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3 row">
                    <label for="titre" class="col-sm-2 col-form-label">Titre</label>
                    <div class="col-auto">
                        <input type="text" name="titre" class="form-control" placeholder="Input Titre" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="contenuu" class="col-sm-2 col-form-label">Contenu</label>
                    <div class="col-auto">
                        <input type="text" name="contenuu" class="form-control" placeholder="Input Contenuu" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-auto">
                        <select class="form-select" name="gender">
                            @foreach($genders as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="langue" class="col-sm-2 col-form-label">Langue</label>
                    <div class="col-auto">
                        <select class="form-select" name="langue">
                            @foreach($langues as $langue)
                                <option value="{{ $langue->id }}">{{ $langue->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Save</button>
      </div>
    </div>
  </div>
</div>