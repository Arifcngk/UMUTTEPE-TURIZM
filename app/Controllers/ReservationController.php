<?php

namespace App\Controllers;

use App\Models\CityModel;

class ReservationController extends BaseController
{
    public function index()
    {
        $data["title"] = "Rezervasyonlarım";
        $data['cities'] = CityModel::getCities();
        return view("pages/reservation", $data);
    }
}