<?php
namespace App\Controllers;

class MyTicketsController extends BaseController
{
    public function index()
    {
       $data["title"] = "Biletlerim"; 
       return view("pages/my_tickets", $data);
    }
} 
?>