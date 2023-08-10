<nav class="navbar navbar-expand-lg bg-warning bg-gradient fixed-top card">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="https://png.pngtree.com/png-vector/20220821/ourmid/pngtree-speed-arrow-fast-quick-icon-logo-design-png-image_6119232.png" alt="Logo" width="60">
      <a class="navbar-brand" id="logo" href="/">Presto.it</a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end fw-semibold pe-3" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown pe-3 d-flex align-items-center">

          @guest

          <span class="bi bi-person-dash text-danger fs-4"></span>
          <ul class="dropdown-menu">
          
            <li><a class="dropdown-item nav-link" href="/login">Accedi</a></li>
            <li><a class="dropdown-item nav-link" href="/register">Registrati</a></li>
          </ul>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            </a>
            <span class="text-decoration-underline fs-5">Utente non autenticato</span>

          @else

          <span class="bi bi-person-check text-success fs-4"></span>
        <ul class="dropdown-menu">
          
          <li><a class="dropdown-item" href="#">Inserisci Annuncio</a></li>
          
          <li><form class="d-flex" action="/logout" method="POST">
            @csrf
                <button class="btn btn-sm bi bi-door-open-fill text-danger"><span class="ps-1 text-black">Logout</span></button>
              </form>
          </li>
        </ul>  
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          </a>
          <span class="text-decoration-underline fs-5"> Benvenuto {{ auth()->user()->name }}  </span>

          @endguest        
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('announces.index') }}">Annunci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lavora con noi</a>
        </li>
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="bi bi-flag-fill"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Italiano</a></li>
            <li><a class="dropdown-item" href="#">Inglese</a></li>
            <li><a class="dropdown-item" href="#">Spagnolo</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>