<!--Header-->
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('welcome') }}">Moonlight-Media</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
        @auth
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">Blog</a>
          </li>
{{--          <li class="nav-item">--}}
{{--            <a class="nav-link" aria-current="page" href="{{ route('chats') }}">Chats</a>--}}
{{--          </li>--}}
        @endauth

        </ul>

          @if (Route::currentRouteName() == 'login')
              <div class="text-end btn_sign">
                  <a class="btn btn-primary" href="{{ route('register') }}" role="button">Sign-Up</a>
              </div>
          @elseif (Route::currentRouteName() == 'register')
              <div class="text-end btn_sign">
                  <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login</a>
              </div>
          @else
          <form class="col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form>
              @auth
                  <div class="dropdown text-end dropdown_mobile">
                      <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="{{ asset('img/avatar.jpg') }}" alt="mdo" width="32" height="32" class="rounded-circle">
                      </a>
                      <ul class="dropdown-menu text-small dropdown_menu">
                          <li>
                              <!-- <a class="dropdown-item" href="{{ route('password.request')  }}">Change Password</a> -->
                              <!-- <hr class="mt-2 mb-2"> -->
                              <form method="post" action="{{ route('logout') }}">
                                  @csrf
                                  <a class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();" href="{{ route('logout') }}">Sign out</a>
                              </form>
                          </li>
                      </ul>
                  </div>
              @else
                  <div class="text-end btn_sign">
                      <a class="btn btn-outline-info" href="{{ route('login') }}" role="button">Login</a>
                      <a class="btn btn-primary" href="{{ route('register') }}" role="button">Sign-Up</a>
                  </div>
              @endauth
          @endif

      </div>
    </div>
  </nav>
</header>
