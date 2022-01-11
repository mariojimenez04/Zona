<div class="login mt-5">
    <a href="/"><h1>Zone</h1></a>
    <div class="login-contenedor">
        <div class="login-contenido">
            <div class="mb-3">
                <a href="/"><img src="/build/images/zone.png" class="img-pequeña" alt=""></a>
            </div>

            <div class="mb-3">
                <p>Conecta con todos tus seres queridos.</p>
                <p>Tu privacidad es primero</p>
            </div>

            <form action="/register" method="POST">

                <div class="login-descripcion d-flex">
                    <span><i class="bi bi-envelope"></i></span>
                    <input name="email" id="email" type="email" placeholder="Correo Electronico">
                </div><!--Cierre email-->

                <button class="boton-1" type="submit">Enviar instrucciones a e-mail</button>
            </form><!--cierre formulario-->

        </div><!--cierre contenido login-->
    </div>
    <div class="d-flex justify-content-center gap-3">
        <a href="/">Inicia sesión</a>
        <p>o</p>
        <a href="/register">Regístrate</a>
    </div>
</div>