<?php
namespace App\Controllers;

class PassengerİnfoController extends BaseController
{
    public function index()
    {
        $data["title"] = "Yolcu Bilgileri";
        return view("pages/passenger_info", $data);
    }
}