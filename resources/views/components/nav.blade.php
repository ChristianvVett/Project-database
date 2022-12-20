<nav class="navbar navbar-expand-lg">
  <div class="container-fluid d-flex flex-column" >
    <a class="navbar-brand" href="{{route('home')}}">
      <img width="130px" src="./img/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="navbar-nav mx-auto">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        <a class="nav-link mx-5 {{(Route::currentRouteName() == 'chi.siamo') ? 'active' : ''}}" href="{{route('chi.siamo')}}">Chi siamo</a>
        <a class="nav-link {{(Route::currentRouteName() == 'nostri.viaggi') ? 'active' : ''}}" href="{{route('nostri.viaggi')}}">Viaggi</a>
        <a class="nav-link mx-5 {{(Route::currentRouteName() == '') ? 'active' : ''}}" href="{{route('contact.us')}}">Contattaci</a>
        <a class="nav-link" href="{{route('productCreate')}}">Inserisci prodotto</a>
        <a class="nav-link mx-5" href="{{route('productWel')}}">Card</a>
        <a class="nav-link" href="{{route('createElectronicStore')}}">Inserisci negozio</a>
        <a class="nav-link mx-5" href="{{route('indexElectronicStore')}}">Tutti i negozi</a>
        <a class="nav-link mx-5" href="{{route('allUser')}}">Tutti gli utenti</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrazione
          </a>
          <ul class="dropdown-menu">
            @guest
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>           
            @else
            <li><a class="dropdown-item" href="" onclick="event.preventDefault(); document.querySelector('#form-logout').submit('');">Logout</a></li>
            <form id="form-logout" method="POST" action="{{route('logout')}}">@csrf</form>
            @endguest
          </ul>
        </li>
      </div>
    </div>
    @guest
    Ciao, compare Accedi
  @else
    Benvenuto {{Auth::user()->name}}
  @endguest
  </div>
</nav>

{{-- <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName() == 'chi.siamo') ? 'active' : ''}}" href="{{route('chi.siamo')}}">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName() == 'nostri.viaggi') ? 'active' : ''}}" href="{{route('nostri.viaggi')}}">Viaggi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName() == '') ? 'active' : ''}}" href="{{route('contact.us')}}">Contattaci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('productCreate')}}">Inserisci prodotto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('productWel')}}">Card</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}