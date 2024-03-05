<?php

namespace App\Controllers;
use App\Models\TicketModel;
use App\Models\CityModel;
use App\Models\RouteModel;
class HomeController extends BaseController
{
    public function index(): string
    {
        $session = session();
        $data['title'] = 'Anasayfa';
        $data['user'] = $session->get('user');
        $data['message'] = session()->getFlashdata('message');
        $data['cities'] = CityModel::getCities();
        $data['routes'] = RouteModel::getTopRoutes(8);
        return view('pages/index', $data);
    }

    public function searchRoutes()
    {
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getTicketsWithDetails();

        return view('pages/ticket_view', ['tickets' => $tickets]);
    }
}
