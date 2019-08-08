<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <script type="text/javascript" src="{{('js/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{('js/bootstrap.js')}}"></script>
    
</head>
<body>
<nav class="navbar nav-link navbar-fix navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">FORDA MALANG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
       @auth
       <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="home">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item ">
        <a class="nav-link" href="daftarOrda">Daftar Organisasi </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      </li>
      @else
      <li class="nav-item ">
        <a class="nav-link" href="about">About</a>
      </li>
       <li>
      <a class="nav-link" href="daftarOrda">Daftar Organisasi</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="register">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
      </li>
    </ul>
     @endauth
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</body>
</html>

