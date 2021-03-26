<header id="header">
    <div class="container-fluid">

      <div class="logo">
        {{-- <h1><a href="index.html">Siimple</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      
      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('announcement.new') }}">
            Nuevo Anuncio
            </a>
          </li>
          <li class="active"><a href="#header" class="scrollto">Home</a></li>
          <li><a href="#about" class="scrollto">Sobre nosotros</a></li>
          <li><a href="#why-us" class="scrollto">¿Por qué vender en Pronto.es?</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact" class="scrollto">Contacto</a></li>
        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header>