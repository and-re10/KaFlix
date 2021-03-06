<header class="pb-5 bg-dark text-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-primary" href="#">KaFlix</a>
        <button class="navbar-toggler boreder border-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('index')}}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('MyVideos.index')}}">Os Meus Videos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filtros
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{-- <a class="dropdown-item" href="{{route('code')}}">Codigo</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('sport')}}">Musica</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('sport')}}">desporto</a> --}}
                @foreach ($filtres as $filtre)
                  <a class="dropdown-item" href="{{route('filters.show', $filtre->id)}}">{{$filtre->name}}</a>
                  <div class="dropdown-divider"></div>
                @endforeach
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</header>