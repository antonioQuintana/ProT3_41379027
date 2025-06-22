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
