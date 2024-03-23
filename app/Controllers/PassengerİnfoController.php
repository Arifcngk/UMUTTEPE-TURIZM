<?php

namespace App\Controllers;

class PassengerİnfoController extends BaseController
{
    public function index()
    {
        // Seçilen koltuk bilgilerini al
        $selectedSeatsString = $this->request->getPost('selectedSeats');

        // JSON formatındaki dizeyi diziye dönüştür
        $selectedSeatsArray = json_decode($selectedSeatsString, true);

        // Dönüşüm başarılı mı kontrol et
        if ($selectedSeatsArray === null) {
            // Dönüşüm başarısız oldu, uygun bir hata işleme stratejisi uygula
            // Örneğin, boş bir dizi atayabilirsiniz
            $selectedSeatsArray = [];
        }

        // Dönüştürülmüş diziyi kullanabilirsiniz
        $data['passengers'] = $selectedSeatsArray;
        // Toplam fiyatı al
        $data['totalPrice'] = $this->request->getPost('totalPrice');

        // Route ID bilgisini al
        $data['route_id'] = $this->request->getPost('routeId');

        $data['title'] = 'Yolcu Bilgileri';
        // Alınan bilgileri kullanarak yapılacak işlemleri burada gerçekleştirin
        // Örneğin, veritabanına kaydetme, başka bir servise gönderme, vs.

        // Örnek bir yanıt oluşturup döndürebiliriz

        //return json_encode($data);
        return view('/pages/passenger_info', $data);
    }
}
