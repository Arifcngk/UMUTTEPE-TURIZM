<?php

namespace App\Controllers;

use App\Models\CityModel;

class TicketsController extends BaseController
{
    public function index()
    {
        $data["title"] = "Biletler";
        $data['cities'] = CityModel::getCities();
        return view("pages/tickets", $data);
    }
}
