@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="py-md-4 pt-4 col-12 col-lg-10">

        <div class="card">
            <div class="card-body d-flex align-items-center profile_bg text-light position-relative">
                <div class="image w-25">
                    <img src="@if ($user->user_image) {{ asset('images/users') . '/' . $user->user_image }} @else {{ asset('images/asset_img/user-icon.png') }} @endif"
                        alt="" class="rounded-circle w-100">
                </div>
                <div class="ms-5 w-75">
                    <h2 class="card-title">
                        <div style="color:black">
                            {{ $user->name }} @if ($user->department)
                            <i class="fas fa-check-circle fa-2xs text-primary"></i>
                        @endif
                        </div>
                        
                    </h2>
                    {{-- <p>Email: <a href="mailto:{{ $user->email }}" target="blank"
                            class="text-info">{{ $user->email }}</a></p> --}}
                </div>
                @if ($user->id != Auth::user()->id)
                    <a href="{{ url('/messenger' . '/' . $user->id) }}"
                        class="btn btn-light position-absolute bottom-0 end-0 me-2 mb-2"><i
                            class="bi bi-chat-right-text me-1"></i>
                        Message</a>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-5 col-lg-4 py-4 py-md-0">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">About</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-light">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        full Name : {{ $user->name }}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Email : {{ $user->email }}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Lives At : {{ $user->livesAtUser }}
                    </li>
                </ul>
            </div>
        </div>

    </div>


    <div class="col-md-7 col-lg-6">

        {{-- whats on your mind --}}
        @if (Auth::user()->id == $user->id)
            <div class="card text-start mb-4">
                <div class="card-body p-3">

                    {{-- INSERT THE RECLAMATIONS IN TABLE HERE  --}}

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Reclamation Subject</th>
                                <th>Reclamation Status</th>
                                <th>View Reclamation Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reclamations as $item)
                                <tr>
                                    <td>{{ $item->titleReclamation }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td><a href={{ "/reclamation/view/" . Auth::user()->id }}>view details</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                </div>
            </div>

            <!-- Create post Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-plus-circle"></i>
                                Create
                                Post
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <textarea class="form-control" id="form4Example3" rows="4" name="post_text"></textarea>
                                    <label class="form-label" for="form4Example3">Whats on your mind,
                                        {{ Auth::user()->name }}?</label>
                                </div>
                                <div class="input-group ">
                                    <span class="input-group-text"><i class="bi bi-image text-success"></i></span>
                                    <input type="file" class="form-control" name="image" id="image" />
                                </div>
                                <div class="text-center my-2">or,</div>
                                <div class="input-group ">
                                    <span class="input-group-text"><i class="fas fa-video text-danger"></i></span>
                                    <input type="file" class="form-control" name="video" id="video" />
                                </div>

                                <select class="form-select form-select-sm mt-3 w-25" name="visibility">
                                    <option value="1">&#127758; Public</option>
                                    <option value="0">&#128274; Only me</option>
                                </select>
                            </div>

                            <div class="modal-footer">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary bg-gradient btn-block ">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif


        

        
    </div>
@endsection