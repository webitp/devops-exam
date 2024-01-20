<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="navbar">
          <div class="navbar__container">
            <div class="navbar__logo">DevOps</div>
            <div class="navbar__action">
              @guest
                <div class="buttons">
                  @if (Route::has('login'))
                      <div class="button nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Авторизация</a>
                      </div>
                  @endif

                  @if (Route::has('register'))
                      <div class="button nav-item">
                          <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                      </div>
                  @endif
                </div>
              @else
                  <div class="logout">
                      <div id="navbarDropdown" class="name nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </div>

                      <div class="button dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              Выйти
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </div>
              @endguest
            </div>
          </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>