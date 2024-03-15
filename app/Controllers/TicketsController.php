<?php

namespace App\Controllers;

use App\Models\CityModel;
use App\Models\RouteModel;

class TicketsController extends BaseController
{
    public function index()
    {
        $data["title"] = "Biletler";
        $data['cities'] = CityModel::getCities();
        $data['routes'] = RouteModel::getRoutesWithCityNames();
        return view("pages/tickets", $data);
    }
}
