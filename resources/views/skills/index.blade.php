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
        <title>Skills</title>

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

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Skills</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Skills</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('skills.create') }}" class="btn add-btn" data-toggle="modal"
                           data-target="#add_ticket">
                            <i class="fa fa-plus">
                            </i>Create</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row filter-row">
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Skill Name</label>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <a href="#" class="btn btn-success btn-block"> Search </a>
                </div>
            </div>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Status</th>
                                <th>Title</th>

                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($skills as $skill)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            @if($skill->category_id == 'Language')
                                            <a class="btn btn-white btn-sm btn-rounded"
                                               data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i>Language
                                            </a>
                                            @endif
                                                @if($skill->category_id == 'Program')
                                            <a class="btn btn-white btn-sm btn-rounded "
                                               data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-info"></i>Program
                                            </a>
                                                    @endif
                                        </div>
                                    </td>
                                    <td>{{ $skill->title }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('skills.edit',$skill->id)  }}"
                                                ><i class="fa fa-pencil m-r-5"></i>
                                                    Edit</a>

                                                <form method="POST" action="{{route('skills.destroy',$skill->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="dropdown-item" type="submit" data-toggle="modal"
                                                            data-target="#delete_ticket">
                                                        <i class="fa fa-trash-o m-r-5"></i>
                                                        Delete


                                                    </button>
                                                </form>
                                                {{--                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">--}}
                                                {{--                                                    @csrf--}}
                                                {{--                                                    <a class="dropdown-item"--}}
                                                {{--                                                       href="{{ route('users.destroy',$user->id) }}" data-toggle="modal"--}}
                                                {{--                                                       data-target="#delete_ticket"><i class="fa fa-trash-o m-r-5"></i>--}}
                                                {{--                                                        Delete</a>--}}
                                                {{--                                                </form>--}}

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Ticket Modal -->
        <div id="add_ticket" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Skill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <label for="title">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" type="text"
                                               name="title" value="{{ old('title') }}" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <label for="number">Number</label>
                                        <input class="form-control @error('number') is-invalid @enderror" type="number"
                                               name="number" value="{{ old('number') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="role_id">Category</label>
                                        <select class="select form-control @error('category_id') is-invalid @enderror"
                                                name="category_id" type="role_id" required>
                                            <option value="">-</option>
                                            <option value="Language" @if( old('category_id') == 'Language' ) selected @endif>Language</option>
                                            <option value="Program" @if( old('category_id') == 'Program' ) selected @endif>Program</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Ticket Modal -->


        <!-- Delete Ticket Modal -->
        <div class="modal custom-modal fade" id="delete_ticket" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Ticket</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6">

                                    <a href="javascript:void(0);" data-dismiss="modal"
                                       class="btn btn-primary cancel-btn">Cancel</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Delete Ticket Modal -->

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
