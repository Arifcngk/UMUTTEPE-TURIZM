<?php
namespace App\Controllers;

use App\Models\UserModel;

class AboutController extends BaseController
{
    public function index()
    {
       $data["title"] = "Hakkımızda"; 
       return view("pages/about", $data);

    }
} 
?>