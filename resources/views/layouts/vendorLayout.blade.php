<!doctype html>
<html lang="en">
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{asset('admin_template/assets/css/libs.bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/assets/css/theme.bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/assets/css/lightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/assets/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css')}}">
    <noscript>
        <style>
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>
    <title>{{config('app.name')}} - {{ $title }}</title>
</head>
<body class="">
  @include('inc.mainNavbar')
  @include('inc.flash')
  @include('inc.error')
    <main id="main">
        <section class="container-fluid">       
             @yield('content')
             
            <footer class="  footer">
                <p class="small text-muted m-0">All rights reserved | © 2021</p>
                <p class="small text-muted m-0">Template created by <a href="https://www.pixelrocket.store/">PixelRocket</a></p>
            </footer>
        </section>
    </main>
    <aside class="aside bg-white">
        <div class="simplebar-wrapper">
            <div data-pixr-simplebar>
                <div class="pb-6">
                    <div class="d-flex d-xl-none justify-content-between align-items-center border-bottom aside-header">
                        <a class="navbar-brand lh-1 border-0 m-0 d-flex align-items-center" href="">
                            <div class="d-flex align-items-center">
                                <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg>
                                <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">EC</span>
                            </div>
                        </a>
                        <i class="ri-close-circle-line ri-lg close-menu text-muted transition-all text-primary-hover me-4 cursor-pointer"></i>
                    </div>
                    @include('layouts.vendorleftmenu')
                </div>
            </div>
        </div>
    </aside>
    <script src="{{asset("admin_template/assets/js/vendor.bundle.js")}}"></script>
    <script src="{{asset("admin_template/assets/js/theme.bundle.js")}}"></script>
    <script src="{{asset("admin_template/assets/js/jquery-3.7.1.min.js")}}"></script>
    <script src="{{asset("admin_template/assets/js/lightbox.min.js")}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    
    @yield('script')
</body>
</html>
