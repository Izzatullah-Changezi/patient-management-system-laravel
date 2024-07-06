<nav class="navbar bg-body-tertiary fixed-top bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
    <div >
    <a class="navbar-brand btn btn-outline-danger text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
    </div>
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/patient">Patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/patients">Patients List</a>
          </li>
      </div>
    </div>
  </div>
</nav>