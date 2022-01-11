<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zone</title>
    <link rel="stylesheet" href="/build/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>


    <?php echo $contenido; ?>

    <?php if ( $_SERVER["REQUEST_URI"] === "/" || $_SERVER["REQUEST_URI"] === "/register" || $_SERVER["REQUEST_URI"] === "/login/identify/recover" ): ?>
        <footer class="mt-3 mb-5 estilo-1">
            <div class="">
                <div class="grid-3 mt-5">
                    <a class="" href="">Acerca de</a>
                    <a class="" href="">Centro de ayuda</a>
                    <a class="" href="">Condiciones de servicio</a>
                    <a class="" href="">Política de privacidad</a>
                    <a class="" href="">Política de cookies</a>
                    <a class="" href="">Blog</a>
                    <a class="" href="">Empleo</a>
                    <a class="" href="">Publicidad</a>
                    <a class="" href="">Marketing</a>
                </div>
            </div>
        </footer>
    <?php endif; ?>
    <script src=""></script>
</body>
</html>