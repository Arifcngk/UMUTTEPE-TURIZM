<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->post('/authenticate', 'AuthController::authenticate');

$routes->get('/register', 'RegisterController::index');

$routes->post('/register', 'AuthController::save');

$routes->get('/logout', 'AuthController::logout');

$routes->get('/about', 'AboutController::index');

$routes->post('/pnrControl', 'PnrController::index');

$routes->get('/profile', 'ProfileController::index');

$routes->get('/tickets', 'TicketsController::index');

$routes->get('/my_tickets', 'MyTicketsController::index');



