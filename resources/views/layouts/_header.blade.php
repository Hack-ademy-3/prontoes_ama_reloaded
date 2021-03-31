

<header id="header">
    <div class="container-fluid">

        <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
        <nav class="nav-menu">
            <ul>
                @auth
                <li><a href="#">Hola, {{auth()->user()->name}}</a></li>
                     <form action="{{route('logout')}}" id='form_logout' method="POST">
                          @csrf
                     </form>
                 <li><a id='logout' class="dropdown-item" href="#">Logout</a></li>
                @endauth
                @guest
                <li><a class="dropdown-item" href="{{route('login')}}">Login / Registro</a></li>
                @endguest

               
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('announcement.new') }}">
                        Nuevo Anuncio
                    </a>
                </li>

                <li><a href="#about" class="scrollto">Sobre nosotros</a></li>
                <li><a href="#why-us" class="scrollto">¿Por qué vender en Pronto.es?</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                                href="{{route('category.announcements',['name'=>$category->name,'id'=>$category->id])}}">
                                {{$category->name}}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#contact" class="scrollto">Contacto</a></li>
                <div class="d-flex">
                @include('layouts._locale',["lang"=>'es','nation'=>'es'])  
                @include('layouts._locale',["lang"=>'en','nation'=>'gb'])  
                @include('layouts._locale',["lang"=>'it','nation'=>'it'])
            </div>
            </ul>
            
           
</header>
