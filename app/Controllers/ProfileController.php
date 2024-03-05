<?php
namespace App\Controllers;

use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index()
    {
       $data["title"] = "Profil"; 
       return view("pages/user_profile", $data);

    }
} 
?>