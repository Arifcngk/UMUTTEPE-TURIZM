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
        $routeModel = new RouteModel();
        $busModel = new BusModel();
        $data['seats'] = $seatModel->where('route_id', $routeId)->findAll();
        $busId = $routeModel->where('id', $routeId)->first()['bus_id'];
        $seatLayout = $busModel->where('id', $busId)->first()['seat_layout'];
        $data['seat_layout'] = $seatLayout;
        echo json_encode($data);
    }
}
