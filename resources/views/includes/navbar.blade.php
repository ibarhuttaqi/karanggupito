<nav class="navv navbar navbar-expand-lg bg-light bg-gradient py-4 text-white bg-opacity-25" >
    <div class="container-fluid">
      <a class="ms-4" href="/">
        <img src="../img/logo2.png" alt="" width="40">
      </a>
      <a class="navbar-brand ms-2" href="/">Karanggupito</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          {{-- <span class="d-flex justify-content-evenly"> --}}
              <li class="nav-item">
                <a class="nav-link {{Request::segment(1) === 'home' ? 'active' : null}}" aria-current="page" href="/home">Home</a>
              </li>
    
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Surat
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/surat">Buat Surat</a></li>
                  <li><a class="dropdown-item" href="/">Surat B</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/dataSurat">Data Surat</a></li>
                </ul>
              </li> --}}
    
              {{-- <li class="nav-item">
                <a class="nav-link {{Request::segment(1) === 'surat' ? 'active' : null}}" href="/surat">Surat</a>
              </li> --}}

              @can('admin')
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1) === 'dataPenduduk' ? 'active' : null}}" href="/dataPenduduk">Data Penduduk</a>
                </li>        
              @endcan
    
              <li class="nav-item">
                <a class="nav-link disabled">IbarPunya ma</a>
              </li>
        </ul>

        <ul class="navbar-nav ms-auto me-4">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{Request::segment(1) === '#' ? 'active' : null}}" href="/#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back! {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="nav-item">
                  <a href="/register" class="dropdown-item"><i class="bi bi-person-add"></i> Add Admin</a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a></button>
                  </form>
                </li>
              </ul>
            </li>
          @else
                <li class="nav-item">
                  <a href="/login" class="nav-link {{Request::segment(1) === 'login' ? 'active' : null}}"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
                </li>
          @endauth
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>