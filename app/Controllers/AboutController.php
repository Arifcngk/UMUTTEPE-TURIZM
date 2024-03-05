<?php
namespace App\Controllers;

use App\Models\UserModel;

class AboutController extends BaseController
{
    public function index()
    {
       return view("pages/about");

    }
} 
?>