<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/usuarios', 'UsuarioController::index');
$routes->get('/usuarios/create', 'UsuarioController::create');
$routes->post('/usuarios/store', 'UsuarioController::store');
$routes->get('/usuarios/edit/(:num)', 'UsuarioController::edit/$1');
$routes->post('/usuarios/update/(:num)', 'UsuarioController::update/$1');
$routes->get('/usuarios/delete/(:num)', 'UsuarioController::delete/$1');

$routes->get('/', 'Home::index');
$routes->get('/rol', 'RolController::index');
$routes->get('/rol/create', 'RolController::create');
$routes->post('/rol/store', 'RolController::store');
$routes->get('/rol/edit/(:num)', 'RolController::edit/$1');
$routes->post('/rol/update/(:num)', 'RolController::update/$1');
$routes->get('/rol/delete/(:num)', 'RolController::delete/$1');

$routes->get('/venta', 'VentaController::index');
$routes->get('/venta/create', 'VentaController::create');
$routes->post('/venta/store', 'VentaController::store');
$routes->get('/venta/edit/(:num)', 'VentaController::edit/$1');
$routes->post('/venta/update/(:num)', 'VentaController::update/$1');
$routes->get('/venta/delete/(:num)', 'VentaController::delete/$1');

$routes->get('/articulo', 'ArticuloController::index');
$routes->get('login', 'LoginController::index');
$routes->post('login/auth', 'LoginController::autenticar');
$routes->get('logout', 'LoginController::salir');