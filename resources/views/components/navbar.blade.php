<nav class="navbar navbar-expand-lg navStyle fixed-top shadow px-md-3">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="https://png.pngtree.com/png-vector/20220821/ourmid/pngtree-speed-arrow-fast-quick-icon-logo-design-png-image_6119232.png" alt="Logo" width="60">
      <span id="logo" class="ps-1">Presto.it</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="dropdown">
            @guest
            <button class="btn dropdown-toggle navDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="bi bi-person-dash text-danger fs-5"></span>
            </button>
            <ul class="dropdown-menu bgDropdown">
              <li><a id="navbarLinks" class="dropdown-item nav-link text-center" href="/login">{{ __('ui.login') }}</a></li>
              <li><a id="navbarLinks" class="dropdown-item nav-link text-center" href="/register">{{ __('ui.signUp') }}</a></li>
            </ul>

            @else

            <button class="btn dropdown-toggle navDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="bi bi-person-check fs-5" style="color: #10403B" ></span>
            </button>
            <ul class="dropdown-menu bgDropdown">
              <li class="text-center">
                <span id="navbarLinks" class="fw-bold purple fs-6">{{auth()->user()->name}} </span>
              </li>
              <li class="text-center">
                <a id="navbarLinks" class="dropdown-item" href="{{route('announces.livewire')}}">{{ __('ui.addAnnounce') }}</a>
              </li>
              @if(auth()->user()->role == "admin")
              <li class="text-center">
                <a id="navbarLinks" class="dropdown-item" href="{{route('admin.panel')}}">{{__('ui.adminTitle')}}</a>
              </li>
              @endif
              <hr>
              <li>
                <form id="navbarLinks" class="d-flex justify-content-center" action="/logout" method="POST">
                  @csrf
                  <button class="btn btn-sm bi bi-door-open-fill text-danger">
                    <span id="navbarLink" class="ps-1">{{ __('ui.logout') }}</span>
                  </button>
                </form>
              </li>
            </ul>

            @endguest

          </div>
        </li>
        <li class="nav-item">
          @if(auth()->user() && auth()->user()->role == "revisor" || auth()->user() && auth()->user()->role == "admin")
        <li class="nav-item">
          <a id="navbarLinkRevisor" class="nav-link btn btn-outline-warning position-relative" aria-current="page" href="{{route('revisor.index')}}">
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
        </li>
        <li class="nav-item">
          <a id="navbarLink" class="nav-link pe-xl-3" href="{{route('announces.index') }}">{{ __('ui.announces') }}</a>
        </li>
        <li class="nav-item">
          <x-_locale :lang="$lang = 'it'" :nation="$nation = 'it'" />
        </li>
        <li class="nav-item">
          <div class="mx-2">
            <x-_locale :lang="$lang = 'en'" :nation="$nation = 'gb'" />
          </div>
        </li>
        <li class="nav-item">
          <x-_locale :lang="$lang = 'es'" :nation="$nation = 'es'" />
        </li>
      </ul>
    </div>
  </div>
</nav>