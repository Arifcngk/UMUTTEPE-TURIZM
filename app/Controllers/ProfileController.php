<?php
namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index()
    {
       $data["title"] = "Profilim"; 
       return view("pages/user_profile", $data);
    }
} 
?>
