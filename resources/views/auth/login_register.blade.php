@extends('layouts.app')

@section('hueco')
<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container">



    </div>

    <div class="row justify-content-center p-5">
        <div class="col-6">
            <h2 class="text-center mb-3">Login</h2>
            <form action="/login" method="POST" role="form">
                @csrf
                <div class="form-group mb-3">
                    <input type="email" class="form-control"  id="email" placeholder="Email" required name='email'>
                    <div class="form-group mt-3">
                        <input type="text"  class="form-control" id="name" placeholder="Contraseña" required name='password'>
                    </div>
                </div>

                <div class="text-center"><button type="submit">Ingresar</button></div>
            </form>
        </div>
        <div class="col-6">
            <h2 class="text-center">Registro</h2>
            <form action="/register" method="POST" role="form">
                @csrf
                <div class="form-group mt-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <input type="text" name="password" class="form-control" id="name" placeholder="Contraseña" required>
                    <div class="form-group mt-3">
                        <input type="text" name="password_confirmation" class="form-control" id="name" placeholder="Repite contraseña"
                            required>
                    </div>

                </div>

                <div class="text-center"><button type="submit">Registrarme</button></div>
            </form>


        </div>

    </div>

    </div>
</section><!-- End Contact Us Section -->


{{-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal">{{ __('Login') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

@endsection

