<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//route admin dashboard
$routes->get('/dashboard', 'Admin\Dashboard::index');

$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
$routes->get('/komik/save', 'Komik::save');
$routes->delete('/komik/(:num)', 'Komik::delete/$1');

$routes->get('/komik/(:any)', 'Komik::detail/$1');

$routes->setAutoRoute(true);
