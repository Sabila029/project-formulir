<?php

use CodeIgniter\Router\RouteCollection;

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php' ;
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes('false');
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * @var RouteCollection $routes
 */
$routes->resource('/api/Dashboard', ['controller' => 'Api\databiodata']);
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::simpan');

