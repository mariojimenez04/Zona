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
                    <span><i class="bi bi-person"></i></i></span>
                    <input name="nombre" id="nombre" type="text" placeholder="Nombre de usuario">
                </div><!--Cierre usuario-->

                <div class="login-descripcion d-flex">
                    <span><i class="bi bi-envelope"></i></span>
                    <input name="email" id="email" type="email" placeholder="Correo Electronico">
                </div><!--Cierre email-->
                
                <div class="login-descripcion d-flex">
                    <span><i class="bi bi-key-fill"></i></span>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div><!--cierre password-->

                <div class="login-descripcion d-flex">
                    <span><i class="bi bi-key-fill"></i></span>
                    <input type="password" name="password" id="password" placeholder="Confirmar password">
                </div><!--cierre password-->

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Acepto los términos y condiciones</label>
                </div>

                <button class="boton-1 mt-3" type="submit">Crear cuenta</button>
            </form><!--cierre formulario-->

        </div><!--cierre contenido login-->
    </div>
    <div class="text-center">
        <a href="/">¿Ya tienes cuenta? inicia sesión</a>
    </div>
</div>