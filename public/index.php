<?php

    require_once __DIR__ . '/../includes/app.php';

    use Controllers\AuthController;
    use Controllers\NotFoundController;
    use MVC\Router;

    $router = new Router();


/** PAGINA PRINCIPAL **/

//Metodo para el index
$router->get('/', [AuthController::class, 'index']);
$router->post('/', [AuthController::class, 'index']);

//Metodo para registrarte
$router->get('/register', [AuthController::class, 'register']);
$router->post('/register', [AuthController::class, 'register']);

//Recuperar contraseña
$router->get('/login/identify/recover', [AuthController::class, 'recovery']);
$router->post('/login/identify/recover', [AuthController::class, 'recovery']);




/** PAGINA NO ENCONTRADA **/
$router->get('/notfound', [NotFoundController::class, 'index']);

$router->comprobarRutas();