<?php

namespace App\Controllers;

use App\Models\CityModel;
use App\Models\RouteModel;
use App\Models\SeatModel;
use App\Models\BusModel;

class RoutesController extends BaseController
{
    public function index()
    {
        $data["title"] = "Biletler";
        $data['cities'] = CityModel::getCities();
        $data['routes'] = RouteModel::getRoutesWithCityNames();
        return view("pages/tickets", $data);
    }

    public function seats($routeId)
    {
        // URL'den gelen parametreleri al

        // Başarılı bir şekilde koltuk seçildiğini varsayalım
        $seatModel = new SeatModel();
        $data['seats'] = $seatModel->where('route_id', $routeId)->findAll();
        $data['route'] = RouteModel::getRoutesWithCityNames($routeId);
        echo json_encode($data);
    }

    public function search()
    {
        // URL'den gelen parametreleri al
        $departure_city = $this->request->getGet('departure_city');
        $arrival_city = $this->request->getGet('arrival_city');
        $departure_date = $this->request->getGet('departure_date');
        $data["title"] = "Biletler";
        $data['cities'] = CityModel::getCities();
        $data['message'] = ['type' => 'error', 'text' => $departure_city . $departure_date . $arrival_city];
        // Veritabanından rotaları çek
        $data['routes'] = RouteModel::searchRoutes($departure_city, $arrival_city, $departure_date);

        return view('pages/tickets', $data);
    }
}
