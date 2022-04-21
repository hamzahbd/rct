<div class="collapse navbar-collapse col-12 col-md-auto mb-2 justify-content-center mb-md-0" id="navbarSupportedContent">
    <ul class="navbar-nav mt-2 mt-lg-0"> 
      <li class="nav-item active">
        <a class="nav-link {{  ($title === "index") ? 'current' : '' }}" href="/">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{  ($title === "aboutus") ? 'current' : '' }}" href="/aboutus">ABOUT US</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          PRODUCT & DISTRIBUTOR
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">PRODUCT</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">DISTRIBUTOR</a></li>
          <li><hr class="dropdown-divider"></li>  
          <li><a class="dropdown-item" href="/service">SERVICES</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link {{  ($title === "news") ? 'current' : '' }}" href="/news">NEWS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          CAREER
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">ASSESSMENT</a></li>
        </ul>
      <li class="nav-item">
        <a class="nav-link {{  ($title === "project") ? 'current' : '' }}" href="project">PROJECTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{  ($title === "service") ? 'current' : '' }}" href="/service">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{  ($title === "contact") ? 'current' : '' }}" href="/contact">CONTACT</a>
      </li>
      <div class="searchBar col-md-3">
        <input class="form-control me-2" id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
          <svg style="width: 24px;;height: 24px;" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
          </svg>
        </button>
      </div>
      
    </div>
    </ul>
    <ul class="navbar-nav mt-2 mt-lg-0">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name  }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          @can('admin')
          <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          @endcan
          <li><a class="dropdown-item" href="#">PROFIL</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">KERANJANG</a></li>
          <li><hr class="dropdown-divider"></li>  
          <li><form action="/logout" method="post">
            @csrf
            <button class="dropdown-item" type="submit">LOGOUT</button>
          </form></li>
        </ul>
      </li>

      
      
      @else
      <li class="nav-item {{  ($title === "login") ? 'active' : '' }}">
        <a href="/login" class="nav-link">LOGIN</a>
      </li>
      @endauth
    </ul>
  </div>