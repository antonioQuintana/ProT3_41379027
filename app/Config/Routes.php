<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('ingresar', 'Home::ingresar');
$routes->get('index', 'Home::index');
$routes->get('pilotos', 'Home::pilotos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('contacta', 'Home::contacta');

/*rutas de registro de usuarios*/
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/* Rutas de inicio de sesión */
$routes->get('/ingresar', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');