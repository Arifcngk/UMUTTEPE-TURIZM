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