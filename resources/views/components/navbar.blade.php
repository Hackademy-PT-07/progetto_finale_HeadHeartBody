<nav class="navbar navbar-expand-lg navSize fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="https://png.pngtree.com/png-vector/20220821/ourmid/pngtree-speed-arrow-fast-quick-icon-logo-design-png-image_6119232.png" alt="Logo" width="60">
      <a class="navbar-brand" id="logo" href="/">Presto.it</a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end pe-3" id="navbarNav">

      
      <ul class="navbar-nav align-items-center">

        <li class="nav-item dropdown pe-3 d-flex align-items-center">

          @guest

          <a class="nav-link dropdown-toggle btn btn-outline-warning " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="bi bi-person-dash text-danger fs-4"></span>
          </a>
          <ul class="dropdown-menu select-bg">

            <li><a class="dropdown-item nav-link" href="/login">{{ __('ui.login') }}</a></li>
            <li><a class="dropdown-item nav-link" href="/register">{{ __('ui.signUp') }}</a></li>
          </ul>

          @else

          <a class="nav-link btn btn-outline-warning dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="bi bi-person-check my-1 ms-1 fs-4"></span>
          </a>

          <ul class="dropdown-menu select-bg">

            <li class="text-center">
              <span class="small fst-italic"></span> <span class="fw-bold purple fs-6">{{auth()->user()->name}} </span>
            </li>

            <li>
              <a class="dropdown-item" href="{{route('announces.livewire')}}">{{ __('ui.addAnnounce') }}</a>
            </li>
            @if(auth()->user()->role == "admin")
            <li>
              <a class="dropdown-item" href="{{route('admin.panel')}}">Pannello admin</a>
            </li>
            @endif
            <li>
              <form class="d-flex justify-content-center" action="/logout" method="POST">
                @csrf
                <button class="btn btn-sm bi bi-door-open-fill text-danger">
                  <span class="ps-1 text-black">{{ __('ui.logout') }}</span>
                </button>
              </form>
            </li>
          </ul>

          @endguest

        </li>

        @if(auth()->user() && auth()->user()->role == "revisor" || auth()->user() && auth()->user()->role == "admin")
        <li class="nav-item">
          <a class="nav-link btn btn-outline-warning me-4 btn-sm position-relative" aria-current="page" href="{{route('revisor.index')}}">
          {{ __('ui.revisorPage') }}
            @if(App\Models\Announce::toBeRevisionedCount() > 0)
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              {{App\Models\Announce::toBeRevisionedCount()}}
              <span class="visually-hidden">{{ __('ui.unreadMsg') }}</span>
            </span>
            @endif
          </a>
        </li>
        @endif

        <li class="nav-item">
          <a class="nav-link me-4 btn btn-outline-warning" href="{{route('announces.index') }}">{{ __('ui.announces') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle btn btn-outline-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span>{{ __('ui.lang') }}</span>
          </a>
          <ul class="dropdown-menu select-bg me-4">
            <div class="d-flex flex-column align-items-start">
            <li>
              <x-_locale :lang="$lang = 'it'" :nation="$nation = 'it'" />
            </li>
            <li>
              <x-_locale :lang="$lang = 'en'" :nation="$nation = 'gb'" />
            </li>
            <li>
              <x-_locale :lang="$lang = 'es'" :nation="$nation = 'es'" />
            </li>
            </div>
          </ul>
        </li>
       
       
      </ul>

    </div>
  </div>
</nav>

