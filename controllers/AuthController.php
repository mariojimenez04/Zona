<?php

    namespace Controllers;

    use MVC\Router;

class AuthController {
        public static function index(Router $router) {

            $router->render('auth/index');
        }

        public static function register(Router $router) {

            $router->render('auth/register');
        }

        public static function recovery(Router $router) {

            $router->render('auth/recovery');
        }

}