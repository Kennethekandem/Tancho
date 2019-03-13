*<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lite.mintone.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jan 2019 14:33:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
    <link href="{{ asset('authored/plugins/vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('authored/plugins/vendors/morrisjs/morris.css') }}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{ asset('authored/plugins/vendors/c3-master/c3.min.css') }}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('authored/plugins/vendors/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- Dashboard server Page CSS -->
    <link href="{{ asset('authored/assets/css/pages/dashboard-server.css') }}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{ asset('authored/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('authored/assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('authored/assets/css/responsive.css') }}" rel="stylesheet">
    @toastr_css
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="{{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    <style>
        .page-wrapper .container-fluid:first-child{
            padding-bottom: 60px;
        }

        @media  screen and (max-width: 768px) {
            .page-wrapper .container-fluid:first-child{
                padding-bottom: 90px;
            }
        }
    </style>
</head>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css')}} -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Mintone</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Container1140px -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    @include('partials.author.navigation')


<!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            @yield('content')
            <a href="blog/create" title="Create Blog"><img src="{{asset('authored/assets/imgs/plus.png')}}" alt="" style="position: fixed; bottom: 31px; right: 31px; height: 45px;"></a>
            <footer class="footer t-a-c mx-lg-3 mx-0 ">
                <div class="p-2 bg-white">
                    <center> 2018 © Mintone Admin Dashboard / Design &amp; Developed By <a
                                href="https://jthemes.com/" target="_blank">jThemes
                            Studio</a></center>
                </div>
            </footer>    </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('authored/plugins/vendors/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('authored/plugins/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('authored/plugins/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('authored/plugins/vendors/ps/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('authored/assets/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('authored/assets/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('authored/assets/js/custom.min.js') }}"></script>
<script>
    $('#slimtest1, #slimtest2').perfectScrollbar();
</script>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<script src="{{ asset('authored/plugins/vendors/d3/d3.min.js') }}"></script>
<script src="{{ asset('authored/plugins/vendors/c3-master/c3.min.js') }}"></script>
<!--jquery knob -->
<script src="{{ asset('authored/plugins/vendors/knob/jquery.knob.js') }}"></script>
<!--Sparkline JavaScript -->
<script src="{{ asset('authored/plugins/vendors/sparkline/jquery.sparkline.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ asset('authored/plugins/vendors/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('authored/plugins/vendors/morrisjs/morris.js') }}"></script>
<!-- Popup message jquery -->
<script src="{{ asset('authored/plugins/vendors/toast-master/js/jquery.toast.js') }}"></script>
<!-- Dashboard JS -->
<script src="{{ asset('authored/assets/js/dashboard-server.js') }}"></script>
<script src="{{ asset('authored/assets/js/random-class.js') }}"></script>
@toastr_js
@toastr_render



<script>
    $(".dial").knob();

    $({animatedVal: 0}).animate({animatedVal: 80}, {
        duration: 2000,
        easing: "swing",
        step: function() {
            $(".dial").val(Math.ceil(this.animatedVal)).trigger("change");
        }
    });
</script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@yield('js')
</body>

<!-- Mirrored from lite.mintone.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jan 2019 14:34:58 GMT -->
</html>