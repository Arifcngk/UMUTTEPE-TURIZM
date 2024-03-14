<?php
namespace App\Controllers;

class SeatSelectionController extends BaseController
{
    public function index()
    {
        $data["title"] = "Koltuk Seç";
        return view("pages/seat_selection", $data);
    }
}