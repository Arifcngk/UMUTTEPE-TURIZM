<?php
namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        $data['message'] = session()->getFlashdata('message');
        $data['title'] = 'Kayıt Ol';
        return view('pages/register', $data);
    }
} 
?>