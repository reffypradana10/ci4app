<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/coba/index', 'Coba::index');
$routes->get('/coba/about', 'Coba::about');
$routes->get('/coba/about/(:any)', 'Coba::about/$1');
$routes->get('/coba/(:any)', 'Coba::about/$1');

$routes->get('/users', 'Admin\Users::index');

$routes->setAutoRoute(true);