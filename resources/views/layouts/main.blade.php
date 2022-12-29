<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- FONTE GOOGLE -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
          
    <!-- CSS DA APLICAÇÃO-->
    <script src="/js/scripts.js"></script>
    <link rel="stylesheet" href="/css/style.css">
  </head>
      <body>
        <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="/img/nasa.jfif" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Eventos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/events/create">Criar Eventos</a>
                  </li>
                  @auth
                    <li class="nav-item">
                      <a class="nav-link" href="/dashboard">Meus eventos</a>
                    </li>
                    <li class="nav-item">
                      <form action="/logout" method="POST">
                      @csrf
                      <a href="/logout" 
                        class="nav-link" 
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Sair
                      </a>
                      </form>
                    </li>
                  @endauth
                  @guest
                    <li class="nav-item">
                      <a class="nav-link" href="/contact">Contato</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/login">Entrar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/register">Cadastrar</a>
                    </li>
                  @endguest
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <main>
          <div class="container-fluid">
            <div class="row">
              @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
              @endif
              @yield('content')
            </div>
          </div>
        </main>

        <footer>
          <p>
            HDC Events &copy; 2022
          </p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      </body>
</html>
