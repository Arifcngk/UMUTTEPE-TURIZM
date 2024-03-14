<?php

use App\Models\TicketModel;
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

$routes->get('/profile', 'UserController::index');

$routes->get('/mytickets', 'UserController::myTickets');

$routes->get('/tickets', 'TicketsController::index');

$routes->get('/searchtickets', 'UserController::search');

$routes->get('/reservation', 'ReservationController::index');

$routes->get('/seatSelection', 'SeatSelectionController::index');



