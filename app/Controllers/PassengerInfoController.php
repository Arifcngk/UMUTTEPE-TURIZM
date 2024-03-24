<?php

namespace App\Controllers;

use App\Models\FareModel;
use App\Models\RouteModel;

class PassengerInfoController extends BaseController
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
        $data['route'] = RouteModel::getRoutesWithCityNames($this->request->getPost('routeId'))[0];

        $data['title'] = 'Yolcu Bilgileri';

        $fareModel = new FareModel();
        $data['fares'] = $fareModel->findAll();
        // Alınan bilgileri kullanarak yapılacak işlemleri burada gerçekleştirin
        // Örneğin, veritabanına kaydetme, başka bir servise gönderme, vs.

        // Örnek bir yanıt oluşturup döndürebiliriz
        return view('/pages/passenger_info', $data);
    }

    public function updatePrice()
    {
        // AJAX isteğiyle gelen verileri al
        $requestData = $this->request->getJSON();
        $index = $requestData->index;
        $fareId = $requestData->fareId;
        $routeId = $requestData->routeId;

        $routeModel = new RouteModel();

        // 1. Kontrol Etme
        if (!is_numeric($routeId)) {
            // Hatalı $routeId, uygun bir işlem yapın
            exit('Hatalı rota kimliği');
        }

        // 2. Veri Varlığını Kontrol Etme
        $route = $routeModel->where('id', $routeId)->find()[0];
        if (!$route) {
            // Belirtilen rota bulunamadı, uygun bir işlem yapın
            exit('Belirtilen rota bulunamadı');
        }

        // 3. Dizinden Veri Çekme ve Güvenli Fiyat Alma
        $price = isset($route['price']) ? $route['price'] : null;
        if (!$price) {
            // Fiyat bulunamadı veya geçersiz, uygun bir işlem yapın
            exit('Fiyat bilgisi bulunamadı');
        }

        // 1. Geçerli bir sayı olup olmadığını kontrol etme
        if (!is_numeric($fareId)) {
            // Hatalı $fareId, uygun bir işlem yapın
            exit('Hatalı yolcu tarifesi kimliği');
        }

        $fareModel = new FareModel();
        // 2. Veritabanında fareId kontrol etme
        $fare = $fareModel->find($fareId);
        if (!$fare) {
            // Belirtilen fareId ile eşleşen bir tarife bulunamadı, uygun bir işlem yapın
            exit('Fiyat bilgisi bulunamadı');
        }

        $rate = $fare['rate'];

        // Yolculuk fiyatını veritabanından alınan oranla çarpın
        $newPrice = $price * $rate;

        // Geriye yanıt döndürmek için JSON yanıtı hazırlayın
        $response = [
            'status' => 'success',
            'message' => 'Fare successfully updated.',
            'index' => $index,
            'fareId' => $fareId,
            'price' => $newPrice
        ];

        // JSON formatında yanıtı döndür
        return $this->response->setJSON($response);
    }
}
