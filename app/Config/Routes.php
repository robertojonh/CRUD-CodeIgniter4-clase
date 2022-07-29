<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/view_user', 'Persona::perfil');
$routes->get('create', 'Persona::create');
$routes->post('creado', 'Persona::store');
$routes->get('edit_user/(:num)', 'Persona::singleUser/$1');
$routes->post('update', 'Persona::update');
$routes->get('delete/(:num)', 'Persona::delete/$1');
$routes->get('/singin', 'Persona::singin');
$routes->get('/singup', 'Persona::singup');

$routes->get('/acceder', 'Acceso::acceder');
$routes->post('/acceder', 'Acceso::acceder_login');

$routes->get('/register', 'Acceso::register');
$routes->post('/probando', 'Acceso::probando_shield');

$routes->get('/recuperar', 'Acceso::recuperar');
$routes->get('/salir', 'Acceso::salir');


$routes->get('/Edificios', 'Edificios::listado');
$routes->get('/Edificios/nuevo', 'Edificios::nuevo');
$routes->post('/Edificios/nuevo', 'Edificios::guardar');


$routes->get('/Usuario/perfil', 'Usuario::perfil');
$routes->get('/Usuario/editar', 'Usuario::editar_perfil');
$routes->get('/Usuario/listar', 'Usuario::listado');
$routes->get('Usuario/edit_user2/(:num)', 'Usuario::singleUser2/$1');
$routes->post('Usuario/update2', 'Usuario::update2');
service('auth')->routes($routes);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
