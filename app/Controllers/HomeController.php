<?php

namespace App\Controllers;
use App\Models\TicketModel;
use App\Models\CityModel;
class HomeController extends BaseController
{
    public function index(): string
    {
        $session = session();
        $data['title'] = 'Anasayfa';
        $data['user'] = $session->get('user');
        $data['message'] = session()->getFlashdata('message');
        $data['cities'] = CityModel::getCities();
        return view('pages/index', $data);
    }

    public function searchRoutes()
    {
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getTicketsWithDetails();

        return view('pages/ticket_view', ['tickets' => $tickets]);
    }
}
