<section id="hero">
    <div class="hero-container">
        <h1>Bienvenido/a a Pronto.es</h1>
        <h2>¡Crea tu cuenta ahora y vende sin parar!</h2>

        <form action="forms/notify.php" method="post" role="form" class="php-email-form">
            <div class="row no-gutters">
                <div class="col-md-6 form-group pl-md-1">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" required>
                </div>
                <div class="col-md-6 form-group pr-md-1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Tu contraseña" required>
                </div>

            </div>

            <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu solicitud de registro se ha enviado exitosamente. ¡Gracias!</div>
            </div>
            <div class="text-center"><button type="submit">Registrarme</button></div>
        </form>
    </div>
</section>
