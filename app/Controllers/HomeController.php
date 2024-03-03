<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        $session = session();
        $data['title'] = 'Anasayfa';
        $data['user'] = $session->get('user');
        $data['message'] = session()->getFlashdata('message');
        return view('pages/index', $data);
    }
}
