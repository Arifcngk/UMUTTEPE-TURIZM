<?php
namespace App\Controllers;

class TicketsController extends BaseController
{
    public function index()
    {  $data["title"] = "Biletler";
       return view("pages/tickets",$data);
    }
} 
?>