<!doctype html>
<html lang="en">

<!-- Head -->
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

    <link rel="stylesheet" href="{{asset('admin_template/assets/css/libs.bundle.css')}}" />
        <link rel="stylesheet" href="{{asset('admin_template/assets/css/theme.bundle.css')}}" />

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>{{config('app.name')}} -{{ $title }}</title>
    
</head>
<body class="">

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom py-0 fixed-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand d-flex justify-content-start align-items-center border-end"
          href="./index.html">
          <div class="d-flex align-items-center">
              <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg>
              <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Vendor</span>
          </div>    </a>
        <div class="d-flex justify-content-between align-items-center flex-grow-1 navbar-actions">
    
          <!-- Search Bar and Menu Toggle-->
          <div class="d-flex align-items-center">
    
            <!-- Menu Toggle-->
            <div class="menu-toggle cursor-pointer me-4 text-primary-hover transition-color disable-child-pointer">
              <i class="ri-skip-back-mini-line ri-lg fold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Close menu"></i>
              <i class="ri-skip-forward-mini-line ri-lg unfold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Open Menu"></i>
            </div>
            <!-- / Menu Toggle-->
    
            <!-- Search Bar-->
            <form class="d-none d-md-flex bg-light rounded px-3 py-1">
                <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search"
                  placeholder="Search" aria-label="Search">
                <button class="btn btn-link p-0 text-muted" type="submit"><i class="ri-search-2-line"></i></button>
            </form>        <!-- / Search Bar-->
    
          </div>
          <!-- / Search Bar and Menu Toggle-->
    
          <!-- Right Side Widgets-->
          <div class="d-flex align-items-center">
    
            <!-- Profile Menu-->
            <div class="dropdown ms-1">
                <button class="btn btn-link p-0 position-relative" type="button" id="profileDropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <picture>
                    <img class="f-w-10 rounded-circle" src="{{asset('admin_template/assets/images/profile-small.jpeg')}}"
                      alt="HTML Bootstrap Admin Template by Pixel Rocket">
                  </picture>
                  <span
                    class="position-absolute bottom-0 start-75 p-1 bg-success border border-3 border-white rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </button>
                <ul class="dropdown-menu dropdown-md dropdown-menu-end" aria-labelledby="profileDropdown">
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Set Visibility</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Edit Settings</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li class="d-flex py-2 align-items-start">
                    <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">J</button>
                    <div class="d-flex align-items-start justify-content-between flex-grow-1">
                      <div>
                        <p class="lh-1 mb-2 fw-semibold text-body">John Daniels</p>
                        <p class="text-muted lh-1 mb-2 small">john@email.com</p>
                      </div>
                      <small class="badge bg-success-faded text-success rounded-pill">Pro</small>
                    </div>
                  </li>     
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Account Settings</a></li>
                  <li>
                    {{-- <a class="dropdown-item d-flex align-items-center" href="#">Logout</a> --}}
                    <form class="dropdown-item d-flex align-items-center" method="POST" action="{{ route('logout') }}">
                      @csrf

                      <x-dropdown-link :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-dropdown-link>
                  </form>
                  </li>
                </ul>
              </div>        <!-- / Profile Menu-->
    
          </div>
          <!-- / Notifications & Profile-->
        </div>
      </div>
    </nav>    <!-- / Navbar-->

    <!-- Page Content -->
    <main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
              </ol>
          </nav>
          {{-- <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> New Project</a>
            <a class="btn btn-sm btn-primary-faded ms-2" href="#"><i class="ri-settings-3-line align-bottom"></i> Settings</a>
            <a class="btn btn-sm btn-secondary-faded ms-2 text-body" href="#"><i class="ri-question-line align-bottom"></i> Help</a>
          </div> --}}
          </div>
        </div>        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">       

        <!-- Page Content-->
        @yield('content')
        <!-- / Page Content-->

        <!-- Footer -->
        <footer class="  footer">
            <p class="small text-muted m-0">All rights reserved | © 2021</p>
            <p class="small text-muted m-0">Template created by <a href="https://www.pixelrocket.store/">PixelRocket</a></p>
        </footer>
        
        
        <!-- Sidebar Menu Overlay-->
        <div class="menu-overlay-bg"></div>
        <!-- / Sidebar Menu Overlay-->
        
        <!-- Modal Imports-->
        <!-- Place your modal imports here-->
        
        <!-- Default Example Modal Import-->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Here goes modal body content
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        <!-- Offcanvas Imports-->
        <!-- Place your offcanvas imports here-->
        
        <!-- Default Example Offcanvas Import-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
              </div>
              <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
        <!-- Activity Offcanvas Import-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
          <div class="offcanvas-header d-flex align-items-center justify-content-between">
            <h5 class="offcanvas-title" id="offcanvasActivityLabel">Activity</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
        
                <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                  <div class="avatar avatar-xs me-3 flex-shrink-0">
                    <picture>
                      <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-7.jpeg" alt="">
                    </picture>
                    <span class="avatar-dot bg-success"></span>
                  </div>
                  <div class="d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <p class="fw-semibold mb-0 me-3">John Doe</p>
                      <span class="small d-block text-muted fw-bolder">5m ago</span>
                    </div>
                    <span class="small d-block text-muted">Submitted quarterly marketing report for review.</span>
                      <div class="bg-light border rounded-md p-2 mt-2 d-flex justify-content-start align-items-start">
                        <div class="d-flex align-items-start me-3">
                          <i class="ri-file-word-line ri-2x lh-1 me-2 text-primary"></i>
                          <div>
                            <span class="d-block fw-bolder small">Year End Report</span>
                            <span class="text-muted d-block fs-xs">24KB</span>
                          </div>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                  <div class="avatar avatar-xs me-3 flex-shrink-0">
                    <picture>
                      <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg" alt="">
                    </picture>
                    <span class="avatar-dot bg-success"></span>
                  </div>
                  <div class="d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <p class="fw-semibold mb-0 me-3">Sally Field</p>
                      <span class="small d-block text-muted fw-bolder">1h ago</span>
                    </div>
                    <span class="small d-block text-muted">Marked project status as completed.</span>
                  </div>
                </li>
                <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                  <div class="avatar avatar-xs me-3 flex-shrink-0">
                    <picture>
                      <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg" alt="">
                    </picture>
                    <span class="avatar-dot bg-success"></span>
                  </div>
                  <div class="d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <p class="fw-semibold mb-0 me-3">Mark Robinson</p>
                      <span class="small d-block text-muted fw-bolder">2h ago</span>
                    </div>
                    <span class="small d-block text-muted">Created 2 new products in Mens Shoes</span>
                      <div class="bg-light border rounded-md p-2 mt-2 d-flex justify-content-start align-items-start">
                        <picture class="me-2">
                          <img class="f-w-12 rounded" src="./assets/images/1.png"
                            alt="">
                        </picture>
                        <picture>
                          <img class="f-w-12 rounded" src="./assets/images/3.png"
                            alt="">
                        </picture>
                      </div>
                  </div>
                </li>
                <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                  <div class="avatar avatar-xs me-3 flex-shrink-0">
                    <picture>
                      <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg" alt="">
                    </picture>
                    <span class="avatar-dot bg-success"></span>
                  </div>
                  <div class="d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <p class="fw-semibold mb-0 me-3">Jeffrey Way</p>
                      <span class="small d-block text-muted fw-bolder">6h ago</span>
                    </div>
                    <span class="small d-block text-muted">Set user status as &#x27;offline&#x27;</span>
                  </div>
                </li>
        
            </ul>
            <a href="#" class="btn btn-outline-secondary btn-sm text-body d-flex align-items-center justify-content-center py-3 mb-4">
              <span class="f-w-4 text-muted d-block me-2">
                <svg class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
            </span>
              View All Activity
            </a>
          </div>
        </div>
        <!-- Message Offcanvas Import-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMessage" aria-labelledby="offcanvasMessageLabel">
            <div class="offcanvas-header position-relative">
              <div class="d-flex flex-column w-100">
                <h5 class="offcanvas-title mb-3" id="offcanvasMessageLabel">Company Meetup</h5>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="avatar-group me-4">
                    <picture class="avatar-group-img">
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small.jpeg"
                        alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <picture class="avatar-group-img">
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg"
                        alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <picture class="avatar-group-img">
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg"
                        alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <picture class="avatar-group-img">
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                        alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <span class="small fw-bolder ms-2 text-muted opacity-90">+ 12 others</span>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon p-0" type="button"
                        id="dropdownTop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-settings-3-line text-muted ri-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownTop">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                </div>
              </div>
              <button type="button" class="btn-close text-reset position-absolute top-20 end-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body h-100 d-flex justify-content-between flex-column pb-0">
              <div class="overflow-auto py-4">
                <div class="overflow-hidden">
                  <!-- Messages-->
                  <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                      <div class="avatar avatar-xs me-3 flex-shrink-0">
                          <picture>
                              <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                              alt="HTML Bootstrap Admin Template by Pixel Rocket">
                          </picture>
                          <span class="avatar-dot bg-success"></span>
                      </div>
                      <div class="d-flex justify-content-start flex-column align-items-start col">
                          <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">Patrick Johnson</span> &middot; 2 mins ago</small>
                          <div class="bg-light p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-e-4">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          </div>
                      </div>
                  </div>          <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                      <div class="d-flex justify-content-end flex-column align-items-end col">
                          <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">You</span> &middot; 5 mins ago</small>
                          <div class="bg-primary text-white p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-s-4">
                              Maecenas aliquet eu felis vel.
                          </div>
                      </div>
                      <div class="avatar avatar-xs ms-3 flex-shrink-0">
                          <picture>
                              <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg"
                              alt="HTML Bootstrap Admin Template by Pixel Rocket">
                          </picture>
                          <span class="avatar-dot bg-success"></span>
                      </div>
                  </div>          <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                      <div class="avatar avatar-xs me-3 flex-shrink-0">
                          <picture>
                              <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                              alt="HTML Bootstrap Admin Template by Pixel Rocket">
                          </picture>
                          <span class="avatar-dot bg-success"></span>
                      </div>
                      <div class="d-flex justify-content-start flex-column align-items-start col">
                          <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">Patrick Johnson</span> &middot; 25 mins ago</small>
                          <div class="bg-light p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-e-4">
                              Cras sit amet gravida augue.
                          </div>
                      </div>
                  </div>          <!-- / Messages-->
                </div>
              </div>
              <div class="border-top p-4 mx-n3">
                <div class="d-flex flex-column align-items-end">
                  <input type="text" class="form-control d-flex w-100 bg-light border-0 text-muted mb-3" placeholder="Add new message...">
                  <div class="d-flex justify-content-between w-100 align-items-center">
                    <i class="ri-attachment-line text-muted ri-lg"></i>
                    <button class="btn btn-sm btn-primary">Send</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>        <!-- / Footer-->        

        </section>
        <!-- / Content-->

    </main>
    <!-- /Page Content -->

    <!-- Page Aside-->
    <aside class="aside bg-white">
    
        <div class="simplebar-wrapper">
            <div data-pixr-simplebar>
                <div class="pb-6">
                    <!-- Mobile Logo-->
                    <div class="d-flex d-xl-none justify-content-between align-items-center border-bottom aside-header">
                        <a class="navbar-brand lh-1 border-0 m-0 d-flex align-items-center" href="./index.html">
                            <div class="d-flex align-items-center">
                                <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg>
                                <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">EC</span>
                            </div>                    </a>
                        <i
                            class="ri-close-circle-line ri-lg close-menu text-muted transition-all text-primary-hover me-4 cursor-pointer"></i>
                    </div>
                    <!-- / Mobile Logo-->
    
      @include('layouts.vendorleftmenu')
                </div>
            </div>
        </div>
    
    </aside>    <!-- / Page Aside-->
    <script src="{{asset("admin_template/assets/js/vendor.bundle.js")}}"></script>
    <script src="{{asset("admin_template/assets/js/theme.bundle.js")}}"></script>
    

</body>

</html>
