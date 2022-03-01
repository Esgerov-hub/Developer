<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Login</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{asset("images/fevicon.png")}}" type="image/png"/>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <!-- site css -->
    <link rel="stylesheet" href="{{asset("style.css")}}"/>
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}"/>
    <!-- color css -->
    <link rel="stylesheet" href="{{asset("css/colors.css")}}"/>
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{asset("css/bootstrap-select.css")}}"/>
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{asset("css/perfect-scrollbar.css")}}"/>
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset("css/custom.css")}}"/>
    <!-- calendar file css -->
    <link rel="stylesheet" href="{{asset("js/semantic.min.css")}}"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="inner_page login">
<div class="full_container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<!-- wow animation -->
<script src="{{asset("js/animate.js")}}"></script>
<!-- select country -->
<script src="{{asset("js/bootstrap-select.js")}}"></script>
<!-- nice scrollbar -->
<script src="{{asset("js/perfect-scrollbar.min.js")}}"></script>
<script>
    var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="{{asset("js/custom.js")}}"></script>
</body>
</html>
