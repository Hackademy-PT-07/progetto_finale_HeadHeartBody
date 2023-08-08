<nav class="navbar navbar-expand-lg bg-body-tertiary shadow fixed-top">
  <div class="container-fluid">
    @guest
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      </ul>
    </div>
    @endguest
    @auth
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
          <a class="dropdown-item " href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
        <form action="{{ route('logout') }}" method="POST" style="display: none" id="form-logout">
      @csrf
        </form>
        </li>
      </ul>
    </div>
    @endauth
  </div>
</nav>