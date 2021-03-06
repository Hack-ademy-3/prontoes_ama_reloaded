<header id="header text-decoration-none">
    <div class="container-fluid">

        <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
        <nav class="nav-menu">
            <ul>
                @auth
                <li><a class="nosub" href="#">Hola, {{auth()->user()->name}}</a></li>
                     <form action="{{route('logout')}}" id='form_logout' method="POST">
                          @csrf
                     </form>
                 <li><a id='logout' class="dropdown-item" href="#">Logout</a></li>
                @endauth
                @guest
                <li><a class="nosub" href="{{route('login')}}">Login / Registro</a></li>
                @endguest

               
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('announcement.new') }}">
                        Nuevo Anuncio
                    </a>
                </li>

                <li><a href="{{route('home')}}" class="nosub"">Home</a></li>
                
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
                <li><a href="#why-us" class="nosub"">¿Por qué vender en Pronto.es?</a></li>
                <li><a href="#contact" class="nosub">Contacto</a></li>
                <div class="d-flex">
                <div class="mx-2">
                    <form action="{{ route('search') }}" method="GET" class="mb-5 mt-5">
                        <input type="text" name="q" style="width:500px;" placeholder="Buscar..">
                        <button class="btn btn-danger" type="submit">Buscar</button>
                    </form>
                </div>
                @include('layouts._locale',["lang"=>'es','nation'=>'es'])  
                @include('layouts._locale',["lang"=>'en','nation'=>'gb'])  
                @include('layouts._locale',["lang"=>'it','nation'=>'it'])
            </div>
            </ul>
            
           
</header>
