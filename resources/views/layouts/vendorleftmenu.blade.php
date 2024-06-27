<ul class="list-unstyled mb-6">
    <li class="menu-section mt-2">Menu</li>
    <li class="menu-item">
        <a class="d-flex align-items-center" href="">
            <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="w-100">
                    <rect fill-opacity=".5" fill="currentColor" x="3" y="3" width="7" height="7"></rect>
                    <rect fill="currentColor" x="14" y="3" width="7" height="7"></rect>
                    <rect fill-opacity=".5" fill="currentColor" x="14" y="14" width="7" height="7">
                    </rect>
                    <rect fill="currentColor" x="3" y="14" width="7" height="7"></rect>
                </svg>
            </span>
            <span class="menu-link">Dashboard<span class="badge bg-success-faded text-success pb-1 ms-2 align-middle rounded-pill">beta</span></span>
        </a>
    </li>
    <li class="menu-section mt-4">Manage</li>
    <li class="menu-item"><a class="d-flex align-items-center collapsed" href="#"
            data-bs-toggle="collapse" data-bs-target="#collapseCatItemPages" aria-expanded="false"
            aria-controls="collapseCatItemPages">
            <span class="menu-icon">
                <svg enable-background="new 0 0 520 520" viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg"><g><path fill="currentColor" d="m481.734 100.063h-158.331l-43.111-70.397c-2.727-4.452-7.571-7.166-12.792-7.166h-119.235c-21.099 0-38.265 17.166-38.265 38.266v65.51 229.184c0 21.1 17.166 38.266 38.265 38.266h261.735 71.734c21.1 0 38.266-17.166 38.266-38.266v-217.13c0-21.101-17.166-38.267-38.266-38.267z"/><path fill="currentColor" opacity=".5" d="m80 355.459v-229.184h-41.734c-21.1 0-38.266 17.166-38.266 38.266v294.693c0 21.1 17.166 38.266 38.266 38.266h333.469c21.1 0 38.266-17.166 38.266-38.266v-35.51h-261.736c-37.641.001-68.265-30.623-68.265-68.265z"/></g></svg>
            </span>
            <span
                class="menu-link">Orders</span></a>
        <div class="collapse" id="collapseCatItemPages">
            <ul class="submenu">
                <li><a href="">All</a></li>
                <li><a href="{{route('categories.create')}}">Add</a></li>                           
            </ul>
        </div>
    </li>
    </li>
    <li class="menu-item">
        <a class="d-flex align-items-center collapsed" href="#"
            data-bs-toggle="collapse" data-bs-target="#collapseProductItemPages" aria-expanded="false"
            aria-controls="collapseMenuItemPages">
            <span class="menu-icon">
                <svg enable-background="new 0 0 520 520" viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg"><g><path fill="currentColor" d="m481.734 100.063h-158.331l-43.111-70.397c-2.727-4.452-7.571-7.166-12.792-7.166h-119.235c-21.099 0-38.265 17.166-38.265 38.266v65.51 229.184c0 21.1 17.166 38.266 38.265 38.266h261.735 71.734c21.1 0 38.266-17.166 38.266-38.266v-217.13c0-21.101-17.166-38.267-38.266-38.267z"/><path fill="currentColor" opacity=".5" d="m80 355.459v-229.184h-41.734c-21.1 0-38.266 17.166-38.266 38.266v294.693c0 21.1 17.166 38.266 38.266 38.266h333.469c21.1 0 38.266-17.166 38.266-38.266v-35.51h-261.736c-37.641.001-68.265-30.623-68.265-68.265z"/></g></svg>
            </span>
            <span class="menu-link">Product</span>
        </a>
        <div class="collapse" id="collapseProductItemPages">
            <ul class="submenu">
                <li><a href="{{route('products.index')}}">All</a></li>
                <li><a href="{{ route('products.create') }}">Add</a></li>                             
            </ul>
        </div>
    </li>
</ul>