<?php

namespace App\Controllers;

use App\Models\CityModel;
use App\Models\RouteModel;
use App\Models\SeatModel;

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
        
        echo json_encode($data);
    }
}
