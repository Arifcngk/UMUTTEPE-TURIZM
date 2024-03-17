<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CreditCardModel;

class AuthController extends BaseController
{
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $user = $model->where('email', $email)->first();

        if ($user) {
            if ($user['password'] == $password) {
                $message = [
                    'type' => 'success',
                    'text' => ' Hoş geldiniz ! ' . "<br>" . $user["first_name"] . $user["last_name"]
                ];
                session()->set('user', $user);
                return redirect()->to('/')->with('message', $message);
            } else {
                $message = [
                    'type' => 'error',
                    'text' => 'Hatalı şifre girdiniz !'
                ];
                return redirect()->back()->with('message', $message);
            }
        } else {
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

        $message = ($model->insert(($user))) ? ['type' => 'warning', 'text' => 'Kayıt işlemi başarıyla tamamlandı.'] : ['type' => 'error', 'text' => 'Kayıt işlemi sırasında bir hata oluştu. Lütfen tekrar deneyin.'];

        session()->set('user', $user);
        $data['message'] = $message;
        return redirect()->to('/')->with('message', $message);
    }


    public function update()
    {
        // Formdan gelen verileri al
        $userData = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'tc_id' => $this->request->getPost('tc_id'),
            'email' => $this->request->getPost('email'),
            'phone_number' => $this->request->getPost('phone_number'),
            'birth_date' => $this->request->getPost('birth_date'),
            'address' => $this->request->getPost('address')
        ];

        // Kullanıcı modelini yükle
        $userModel = new UserModel();

        // Kullanıcıyı güncelle
        $userId = session()->get('user')['id']; // Örnek olarak 38 numaralı kullanıcıyı güncelleyelim
        $userModel->update($userId, $userData);
        session()->set('user', $userModel->where('id', $userId)->first());

        // Kullanıcıyı güncelledikten sonra bir yerine yönlendirme yapabiliriz
        return redirect()->to('/profile')->with('message', ['type' => 'warning', 'text' => 'Kayıt işlemi başarıyla tamamlandı.']);
    }

    public function updatePassword()
    {
        // Formdan gelen verileri al
        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // Kullanıcının oturumunu kontrol et
        $userId = session()->get('user')['id'];
        if (!$userId) {
            return redirect()->to('/login'); // Kullanıcı giriş yapmamışsa, giriş sayfasına yönlendir
        }

        // Yeni parolaların doğruluğunu kontrol et
        if ($newPassword != $confirmPassword) {
            $message = ['type' => 'warning', 'text' => 'Yeni parolalar eşleşmiyor.'];
            return redirect()->back()->with('message', $message); // Hata mesajıyla birlikte formu geri dön
        }

        // Kullanıcı modelini yükle
        $userModel = new UserModel();

        // Kullanıcının mevcut parolasını kontrol et
        $user = $userModel->find($userId);
        if (!$user['password'] == $currentPassword) {
            $message = ['type' => 'warning', 'text'  => 'Mevcut parola yanlış.' . $user['password'] . ' => ' . $currentPassword];
            return redirect()->back()->with('message', $message); // Hata mesajıyla birlikte formu geri dön
        }

        // Yeni parolayı hashle ve güncelle
        $userModel->update($userId, ['password' => $confirmPassword]);
        $message = ['type' => 'success', 'text' => 'Parolanız başarıyla değiştirildi.'];
        return redirect()->to('/profile')->with('message', $message); // Başarı mesajıyla birlikte profil sayfasına yönlendir
    }

    public function addCreditCard()
    {
        // Formdan gelen verileri al
        $cardHolderName = $this->request->getPost('cardHolderName');
        $cardNumber = $this->request->getPost('cardNumber');
        $expirationDate = $this->request->getPost('expirationDate');
        $cvv = $this->request->getPost('cvv');

        // Veritabanına yeni kredi kartı ekle
        $creditCardModel = new CreditCardModel();
        $creditCardData = [
            'user_id' => session()->get('user')['id'],
            'card_holder_name' => $cardHolderName,
            'card_number' => $cardNumber,
            'expiration_date' => $expirationDate,
            'cvv' => $cvv
        ];
        $creditCardModel->insert($creditCardData);

        $message = ['type' => 'success', 'text' => 'Kredi kartı başarıyla eklendi.'];
        return redirect()->back()->with('message', $message);
        // Başarılı yanıt gönder

    }

    public function deleteCreditCard($id)
    {
    // Kredi kartı modelini yükleyin
    $creditCardModel = new CreditCardModel();

    // Kredi kartını sil
    $creditCardModel->delete($id);

    // Başarılı mesajı gönderin ya da başka bir işlem yapın
    $message = ['type' => 'success', 'text' => 'Kredi kartı başarıyla silindi.'];
    return redirect()->back()->with('message', $message);
    }

    public function deleteAccount() {
        $userModel = new UserModel();
        $userId = session()->get('user')['id'];

        if ($userId) {
            $userModel->delete($userId);
            session()->remove('user');
            return redirect()->to('/')->with('message', ['type' => 'success', 'text' => 'Kullanıcı başarıyla silindi']);
        }
        else {
            return redirect()->back()->with('message', ['type' => 'error', 'text' => 'Kullanıcı kaldırılırken bir hata oluştu.']);
        }
    }
}
