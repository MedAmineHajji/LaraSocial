@extends('layouts.app')
@inject('orderController', 'App\Http\Controllers\Formation\OrderController')

@section('title')
Formations Information |
@endsection
@php
$menu = 'formation_info';

@endphp

@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<div class="row">
    {{-- Left section started --}}
    <div class="col-lg-3 col-md-3 py-md-4 pt-4 scroll">
        <div class="card mb-4">
            <div class="card-body px-3">
                <h4 class="card-title text-center">Formations Information</h4>
                <hr>
                <div class="list-group list-group-light" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active px-3 border-0" id="list-teacher-list"
                        data-mdb-toggle="list" href="#list-teacher" role="tab"
                        aria-controls="list-teacher">Formations</a>
                    <a class="list-group-item list-group-item-action px-3 border-0" id="list-student-list"
                        data-mdb-toggle="list" href="#list-student" role="tab" aria-controls="list-student">Students</a>
                </div>
            </div>
        </div>

        <div class="d-none d-lg-block">
            @include('layouts.includes.leftbar')
        </div>
    </div>
    {{-- Left section ended --}}

    {{-- Center section started --}}
    <div class="col-md-9 py-md-4 scroll justify-content-md-center d-md-flex">
        <div class="col-lg-11">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-teacher" role="tabpanel"
                    aria-labelledby="list-teacher-list">
                    <div class="card">
                        <div class="card-header">
                            <h5>Formations information</h5>
                        </div>
                        <div class="card-body table-responsive">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Ajouter formation
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une formation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <form action="{{ route('formations.store') }}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" name="title" id="title" class="form-control"
                                                        required>
                                                </div>
                                                <input type="hidden" name="user_id" id="user_id"
                                                    value="{{ Auth::user()->id }}">

                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" id="description" class="form-control"
                                                        required></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input type="number" name="price" id="price" class="form-control"
                                                        required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="duration">Duration (in days)</label>
                                                    <input type="number" name="duration" id="duration"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="modal-footer text-right">
                                                <button type="submit" class="btn btn-primary">Ajouter une
                                                    formation</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">My Modal</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Modal content goes here -->
                                    </div>
                                </div>
                            </div>
                        </div>




                        <table id="formation_info_table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Teacher name</th>

                                    <th>Teacher e-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formations as $formation)
                                <tr>
                                    <th>{{ $formation->title }}</th>
                                    <td>{{ $formation->description }}</td>
                                    <td>{{ $formation->price }}</td>
                                    <td>{{ $formation->duration }}</td>
                                    <td>{{ $formation->teacher->name }}</td>

                                    <td>{{ $formation->teacher->email }}</td>
                                    <td class="d-flex justify-content-center">
                                        @if ($formation->user_id === Auth::user()->id)
                                        <!-- Display a button for the formation creator to view applicants -->
                                        <a href="#list-student" class="btn btn-primary h-25"
                                            id="viewApplicantsBtn" data-formation-id="{{ $formation->id }}">
                                            <i class="fas fa-eye"></i></a>

                                            <button type="button" class="btn btn-success h-25" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modifier formation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <form action="{{ route('formations.update', ['formation' => $formation->id]) }}" method="post">
                                        @csrf
    @method('PUT')
    
    <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input value="{{ $formation->title }}" type="text" name="title" id="title" class="form-control"
                                                        required>
                                                </div>
                                                <input type="hidden" name="user_id" id="user_id"
                                                    value="{{ Auth::user()->id }}">

                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea  name="description" id="description" class="form-control"
                                                        required>{{ $formation->description }}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="price">price</label>
                                                    <input value="{{ $formation->price }}" type="number" name="price" id="price" class="form-control"
                                                        required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="duration">Duration (in days)</label>
                                                    <input value="{{ $formation->duration }}"type="number" name="duration" id="duration"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="modal-footer text-right">
                                                <button type="submit" class="btn btn-primary">modifier une
                                                    formation</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                                            <form method="POST" action="{{ route('formations.destroy', ['formation' => $formation->id]) }}">
    @csrf
    @method('DELETE')
    <input type="hidden" name="formation_id" value="{{ $formation->id }}">
    <button type="submit" class="btn btn-danger px-4    ">   <i class="fas fa-trash"></i></button>
</form>
                                           
                                        @else
                                        @if (!$orderController->hasOrderedFormation($formation->id,Auth::user()->id))
                                        <form method="POST" action="{{ route('orders.store') }}">
                                            @csrf
                                            <input type="hidden" name="student_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="formation_id" value="{{ $formation->id }}">
                                            <input type="hidden" name="order_date" value="{{ now() }}">
                                            <input type="hidden" name="status" value="pending">
                                            <button type="submit" class="btn btn-success px-1 py-0 mx-1 shadow-0">Order
                                                Formation</button>
                                        </form>

                                        @else

                                        <form method="POST"
                                            action="{{ route('orders.destroy', ['formationId' => $formation->id, 'userId' => Auth::user()->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger px-1 py-0 mx-1 shadow-0">Cancel
                                                Order</button>
                                        </form>


                                        @endif
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="applicantsTable" style="display: none;">
<h4 class="card-title text-center"> Student aplied</h4>

                        <table id="formation_info_table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Student name</th>
                                    <th>Student email</th>
                                    <th>Status</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    </div>
                   
                </div>
            </div>

            <div class="tab-pane fade" id="list-student" role="tabpanel" aria-labelledby="list-student-list">
                <div class="card">
                    <div class="card-header">
                        <h5>Students information</h5>
                    </div>
                    <div class="card-body">
                        <table id="st_info_table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Session</th>
                                    <th>Student ID</th>
                                    <th>Department</th>
                                    <th>Mail</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('viewApplicantsBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the anchor tag's default behavior

        const formationId = this.getAttribute('data-formation-id');
        const applicantsTable = document.getElementById('applicantsTable');
        const isHidden = applicantsTable.style.display === 'none';

        if (isHidden) {
            // Make an AJAX request to fetch user details for applicants
            $.ajax({
                url: '/formations/' + formationId + '/ordered-users',
                type: 'GET',
                success: function(userDetails) {
                    console.log('Data received:', userDetails);

                    // Target the <tbody> element for the table
                    const tbody = applicantsTable.querySelector('tbody');

                    // Create a string to hold the HTML for each row
                    const userDetailsHTML = userDetails.map(function(user) {
                        return `
                        <tr>
                            <td>${user.name}</td>
                            <td>${user.email}</td>
                            <td>
    <a href="#"
       data-order-id="${user.order_id}"
       class="toggle-status-link"
       onclick="toggleStatus(event)">
       ${user.status}
    </a>
</td>
                            <td>${user.order_date}</td>
                        </tr>
                    `;
                    }).join('');

                    // Update the <tbody> with the user details
                    tbody.innerHTML = userDetailsHTML;

                    // Toggle display based on the current state
                    applicantsTable.style.display = isHidden ? 'block' : 'none';
                },
                error: function() {
                    // Handle the error, if needed
                }
            });
        } else {
            // Toggle display without making an AJAX request
            applicantsTable.style.display = 'none';
        }
    });

    function toggleStatus(event) {
        event.preventDefault();

        const orderId = event.target.getAttribute('data-order-id');
        const statusCell = event.target;

        // Get the CSRF token from a meta tag in your HTML
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        // Add the CSRF token to the request headers

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: `/orders/${orderId}/toggle-status`,
            type: 'PUT',
            success: function(newStatus) {
                statusCell.innerHTML = newStatus;
            },
            error: function(xhr, textStatus, errorThrown) {
                // Handle the error here
                console.error("Error: " + errorThrown);
                console.log("Status: " + textStatus);
                console.log(xhr);
            }
        });
    }
    </script>

    {{-- Center section ended --}}