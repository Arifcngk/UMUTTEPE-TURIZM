<?php
namespace App\Controllers;

use App\Models\UserModel;

class PnrController extends BaseController
{
    public function index()
    {
       return view("pages/pnrController");

    }
} 
?>