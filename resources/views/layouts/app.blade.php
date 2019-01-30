<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tancho</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="icon" href="images/favicon.png.html" sizes="32x32" />

	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,700%7CCrete+Round' type='text/css' media='all' />

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/libs/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/libs/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
</head>

<body class="single">

	<!-- Wrapper Site -->
	<div id="main-content">

		<!-- Preload -->
		<div id="preload">
			<div class="kd-bounce">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- Preload -->

		<!-- Mobile Menu -->
		<div class="mobile">
			<div class="container">
				<!-- Mobile -->
				<div class="menu-mobile">
					<span class="item item-1"></span>
					<span class="item item-2"></span>
					<span class="item item-3"></span>
				</div>
				<!-- End Mobile -->

				<!-- Logo -->
				<div class="logo">
					<a href="/">
						<img src="images/logo-mobile.png" alt="Logo">
					</a>
				</div>
				<!-- End Logo -->
			</div>
		</div>
		<div class="hide-menu"></div>
		<!-- End Mobile Menu -->

		<div class="container">
			<div class="row">
                @include('partials.navigation')
                @yield('content')
            </div>
        </div>
        <!-- End Wrapper Site -->
        @include('partials.footer')
    
    <!-- Scripts -->
    <script src="{{ asset('assets/js/libs/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- End Scripts -->

    </body>
    </html>    