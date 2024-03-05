<?php

namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }

    public function authenticate() {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $user = $model->where('email', $email)->first();

        if ($user) {
            if($user['password'] == $password) {
                 $message = [
                    'type' => 'success',
                    'text' => ' Hoş geldiniz ! '."<br>".$user["first_name"].$user["last_name"]
                 ];
                session()->set('user', $user);
                return redirect()->to('/')->with('message', $message);
            }
            else {
                $message = [
                    'type' => 'error',
                    'text' => 'Hatalı şifre girdiniz !'
                ];
                return redirect()->back()->with('message', $message);
            }
        }
        else {
            $message = [
                'type' => 'error',
                'text' => 'Geçersiz kullanıcı adı'
            ];

            return redirect()->back()->with('message', $message);
        }
    }

    public function save()
    {
        $model = new UserModel();

        $user = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'tc_id' => $this->request->getPost('tc_id'),
            'email'    => $this->request->getPost('email'),
            'phone_number' => $this->request->getPost('phone_number'),
            'password' => $this->request->getPost('password'),
            'gender' => $this->request->getPost('gender')
        ];

        $message = ($model->insert(($user))) ? ['type' => 'warning', 'text' =>'Kayıt işlemi başarıyla tamamlandı.'] : ['type' => 'error' ,'text' => 'Kayıt işlemi sırasında bir hata oluştu. Lütfen tekrar deneyin.'];

        session()->set('user', $user);
        $data['message'] = $message;
        return redirect()->to('/')->with('message', $message);
    }
}
