<style>/* ============ desktop view ============ */
    @media all and (min-width: 992px) {
      .navbar .nav-item .dropdown-menu{ display: none; }
      .navbar .nav-item:hover .nav-link{   }
      .navbar .nav-item:hover .dropdown-menu{ display: block; }
      .navbar .nav-item .dropdown-menu{ margin-top:0; }
    }
    /* ============ desktop view .end// ============ */
    </style>

<nav class="navbar navbar-expand-lg rounded navbar-dark bg-primary" aria-label="Eleventh navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Campus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Classes</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown09">
                  <li><a class="dropdown-item" href="/sections/liste">Liste des classes</a></li>
                  <li><a class="dropdown-item" href="/section/ajouter">Ajouter une classe</a></li>
                </ul>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Matières</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown09">
                <li><a class="dropdown-item" href="/sujets/liste">Liste des matières</a></li>
                <li><a class="dropdown-item" href="/sujets/ajouter">Ajouter une matière</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Etudiants</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown09">
                <li><a class="dropdown-item" href="/etudiants/liste">Liste des étudiants</a></li>
                <li><a class="dropdown-item" href="/etudiant/ajouter">Ajouter un étudiant</a></li>
              </ul>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0" action="{{url('/search')}}" method="POST">
            {!! csrf_field() !!}
            <input class="form-control" type="text" name="search" id="search" placeholder="Rechercher un étudiant">
          </form>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        </div>
      </div>
    </nav>


