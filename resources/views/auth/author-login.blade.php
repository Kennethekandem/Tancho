

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Mintone">
    <meta name="author" content="Admin Mintone">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('authored/assets/imgs/favicon.png') }}">
    <title>Admin Mintone - Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('authored/plugins/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('authored/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('authored/assets/css/responsive.css') }}" rel="stylesheet">
    <!-- Page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body class="single-page-bg">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Mintone</p>
    </div>
</div>
<div id="main-wrapper">
    <div class="navbar-header mt-5 ml-5">
        <a class="navbar-brand" href="index.html"> <img src="{{ asset('authored/assets/imgs/logo-t.png') }}" alt="homepage" class="dark-logo"> </a> </div>
    <div class="container">
        <div class="page-wrapper m-0 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-12">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <form method="POST" class="form bordered-input" action="{{ route('author.login.submit') }}">
                                    @csrf
                                    <input type="hidden">
                                    <div class="p-30 pb-0">
                                        <div class="form-group m-t-20 row">
                                            <div class="col-12">
                                                <input class="form-control pl-0 font-12 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group row m-b-10">
                                            <div class="col-12">
                                                <label for="example-search-input" class="col-form-label font-12 text-primary">Password</label>
                                                <input class="form-control  pl-0 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" value="password" id="password">
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group row m-b-20">
                                            <div class="col-6"><a class="text-dark font-14 " href="#">
                                                    <div class="checkbox pull-left" style="margin-left: 20px;">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                    Remember Me</a>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-6">
                                                @if (Route::has('password.request'))
                                                <a class="font-14 text-primary" href="{{ route('password.request') }}">
                                                {{ __('Forgot Password?') }}
                                                </a>
                                                @endif
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group row m-b-10">
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn btn-rounded btn-primary m-b-20 waves-effect waves-light btn-block">
                                                    Login
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('authored/plugins/vendors/jquery/jquery.min.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('authored/assets/js/single-page.js') }}"></script>
</body>

<!-- Mirrored from lite.mintone.xyz/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jan 2019 14:38:03 GMT -->
</html>
