<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/usuarios', 'UsuarioController::index');
    $routes->get('/usuarios/create', 'UsuarioController::create');
    $routes->post('/usuarios/store', 'UsuarioController::store');
    $routes->get('/usuarios/edit/(:num)', 'UsuarioController::edit/$1');
    $routes->post('/usuarios/update/(:num)', 'UsuarioController::update/$1');
    $routes->get('/usuarios/delete/(:num)', 'UsuarioController::delete/$1');

    $routes->get('/', 'Home::index');
    $routes->get('/home', 'Home::index');
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

    $routes->get('articulo', 'ArticuloController::index');
    $routes->get('articulo/create', 'ArticuloController::create');
    $routes->post('articulo/store', 'ArticuloController::store');
    $routes->get('articulo/edit/(:num)', 'ArticuloController::edit/$1');
    $routes->post('articulo/update/(:num)', 'ArticuloController::update/$1');
    $routes->get('articulo/delete/(:num)', 'ArticuloController::delete/$1');

    $routes->get('clasificaciones', 'ClasificacionController::index');
    $routes->get('clasificaciones/create', 'ClasificacionController::create');
    $routes->post('clasificaciones/store', 'ClasificacionController::store');
    $routes->get('clasificaciones/edit/(:num)', 'ClasificacionController::edit/$1');
    $routes->post('clasificaciones/update/(:num)', 'ClasificacionController::update/$1');
    $routes->get('clasificaciones/delete/(:num)', 'ClasificacionController::delete/$1');

    $routes->get('/localidad', 'LocalidadController::index');
    $routes->get('/localidad/create', 'LocalidadController::create');
    $routes->post('/localidad/store', 'LocalidadController::store');
    $routes->get('/localidad/edit/(:num)', 'LocalidadController::edit/$1');
    $routes->post('/localidad/update/(:num)', 'LocalidadController::update/$1');
    $routes->get('/localidad/delete/(:num)', 'LocalidadController::delete/$1');
});

$routes->get('login', 'LoginController::index');
$routes->post('login/auth', 'LoginController::autenticar');
$routes->get('logout', 'LoginController::salir');