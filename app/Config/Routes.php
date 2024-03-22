<?php

use App\Controllers\TicketsController;
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

$routes->get('/tickets', 'RoutesController::index');

$routes->get('/searchtickets', 'UserController::search');

$routes->get('/reservation', 'ReservationController::index');

$routes->get('/seatSelection', 'SeatSelectionController::index');

$routes->get('/passengerİnfo', 'PassengerİnfoController::index');

$routes->get('/seats/(:num)', 'RoutesController::seats/$1');

$routes->post('/user/update', 'AuthController::update');

$routes->get('/user/delete', 'AuthController::deleteAccount');

$routes->post('/user/update-password', 'AuthController::updatePassword');

$routes->post('/add_credit_card', 'AuthController::addCreditCard');

$routes->post('/delete_credit_card/(:num)', 'AuthController::deleteCreditCard/$1');

$routes->get('/ticketpayment', 'PaymentController::payment');

$routes->get('/search_routes', 'RoutesController::search');




