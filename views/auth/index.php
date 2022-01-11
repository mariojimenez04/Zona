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

            <form action="/" method="POST">
                <div class="login-descripcion d-flex">
                    <span><i class="bi bi-envelope"></i></span>
                    <input name="email" id="email" type="email" placeholder="Correo Electronico">
                </div><!--Cierre usuario-->
                
                <div class="login-descripcion d-flex">
                    <span><i class="bi bi-key-fill"></i></span>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div><!--cierre password-->
                <button class="boton-1" type="submit">Iniciar sesion</button>
            </form><!--cierre formulario-->

        </div><!--cierre contenido login-->
    </div>
    <div class="d-flex justify-content-between gap-3">
        <a href="/register">Crear nueva cuenta</a>
        <a href="/login/identify/recover">¿Olvidaste tu contraseña?</a>
    </div>
</div>