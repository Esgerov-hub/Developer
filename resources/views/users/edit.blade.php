@extends('layouts.app')
@section('admin.css')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords"
              content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Users</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

        <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

        <!-- Datatable CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]->
        <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets/js/respond.min.js') }}"></script>
        <![endif]-->
    </head>
@endsection
@section('admin.body')
    <div class="page-wrapper">

        <!-- Edit Ticket Modal -->
        <div>
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Ticket</h5>
                        <a class="btn btn-primary submit-bt" href="{{ route('users.index')  }}"
                        ><i class="fa fa-close"></i>
                            Close</a>

                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users.update',$user->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <label for="name">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                               name="name" value="{{ $user->name }}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">E-Mail</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                               name="email" value="{{ $user->email }}" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="role_id">Slogan</label>
                                        <select class="select form-control @error('role_id') is-invalid @enderror"
                                                name="role_id" type="role_id" required>
                                            <option value="">-</option>
                                            <option value="1" @if( $user->role_id == 1 ) selected @endif>Admin</option>
                                            <option value="2" @if( $user->role_id == 2 ) selected @endif>User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status_id">Status</label>
                                        <select class="select form-control @error('status_id') is-invalid @enderror"
                                                name="status_id" type="status_id" required>
                                            <option value="">-</option>
                                            <option value="1" @if( $user->status_id == 1 ) selected @endif>Active
                                            </option>
                                            <option value="2" @if( $user->status_id == 2 ) selected @endif>No Active
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control "
                                               type="password"
                                               name="password" value="{{ old('password') }}" >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input class="form-control "
                                               type="password"
                                               name="confirm_password" value="{{ old('confirm_password') }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div id="wrapper" class="col-sm-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input class="form-control "
                                               type="file" accept="image/*" onchange="preview_image(event)" name="image"
                                               value="{{ $user->image }}" >
                                    </div>
                                </div>
                                <div id="wrapper" class="col-sm-6">
                                    <div class="form-group">
                                        <label></label>
                                        <div class="project-members">
                                            <a data-placement="top" data-toggle="tooltip"
                                               class="avatar">

                                                <img id="image" src="{{ asset( \Illuminate\Support\Facades\Storage::url($user->image)) }}"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div id="wrapper" class="col-sm-6">
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Update</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Ticket Modal -->

    </div>

@endsection
@section('admin.js')
    <!-- jQuery -->

    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JS -->

    <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

    <!-- Select2 JS -->

    <script src="{{asset('assets/js/select2.min.js')}}"></script>

    <!-- Datetimepicker JS -->

    <script src="{{asset('assets/js/moment.min.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <!-- Datatable JS -->

    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
