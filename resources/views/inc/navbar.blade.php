<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('admin_template/assets/images/logoipsum-332.svg') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ URL('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('about') }}">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ URL('categories') }}">Categories</a></li>
            <li><a class="dropdown-item" href="{{ URL('subcategories') }}">Sub Categories</a></li>
            <li><a class="dropdown-item" href="{{ URL('products') }}">Products</a></li>
            <li><a class="dropdown-item" href="{{URL('collection')}}">Collection</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
          <!--Notifications & Profile Menu start here-->
          <div class="d-flex align-items-center">
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
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li class="d-flex py-2 align-items-start">
                    <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">J</button>
                    <div class="d-flex align-items-start justify-content-between flex-grow-1">
                      <div>
                        <p class="lh-1 mb-2 fw-semibold text-body">John Daniels</p>
                        {{-- <p class="lh-1 mb-2 fw-semibold text-body">{{ Auth::user()->name }}</p> --}}
                        <p class="text-muted lh-1 mb-2 small">john@email.com</p>
                      </div>
                      <small class="badge bg-success-faded text-success rounded-pill">Pro</small>
                    </div>
                  </li>     
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <form class="dropdown-item d-flex align-items-center" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                  </li>
                </ul>
              </div>
          </div>
        <!--Notifications & Profile Menu end here-->
    </div>
  </div>
</nav>