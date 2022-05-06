<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/order*') ? 'active' : '' }}" aria-current="page" href="#">
            <span data-feather="bi bi-mailbox"></span>
            Order
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/product*') ? 'active' : '' }}" aria-current="page" href="/dashboard/product">
            <span data-feather="grid"></span>
            Produk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/project*') ? 'active' : '' }}" aria-current="page" href="/dashboard/project">
            <span data-feather="grid"></span>
            Projects
          </a>
        </li>
        
        
        {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Service
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
            <span data-feather="grid"></span>
            News
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Contact
          </a>
        </li> --}}
     

      

    </div>
  </nav>