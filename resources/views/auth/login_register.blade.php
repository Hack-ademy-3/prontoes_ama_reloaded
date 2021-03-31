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


@endsection

