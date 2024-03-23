<?php

namespace App\Controllers;

class PassengerİnfoController extends BaseController
{
    public function index()
    {
        // Seçilen koltuk bilgilerini al
        $selectedSeatsString = $this->request->getPost('selectedSeats');

        // Toplam fiyatı al
        $totalPrice = $this->request->getPost('totalPrice');

        // Route ID bilgisini al
        $routeId = $this->request->getPost('routeId');

        // Alınan bilgileri kullanarak yapılacak işlemleri burada gerçekleştirin
        // Örneğin, veritabanına kaydetme, başka bir servise gönderme, vs.

        // Örnek bir yanıt oluşturup döndürebiliriz
        return json_encode(['status' => 'success', 'selectedSeats' => $selectedSeatsString, 'totalPrice' => $totalPrice, 'routeId' => $routeId]);
    }
}
