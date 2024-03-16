<?php

namespace App\Controllers;

use App\Models\TicketModel;
use App\Models\CityModel;
use App\Models\CreditCardModel;
use chillerlan\QRCode\QRCode;

class UserController extends BaseController
{
    public function index()
    {
        $data["title"] = "Profil";
        // Oturumdan kullanıcı kimliğini al
        $session = session();
        $user = $session->get('user');

        // Eğer kullanıcı kimliği oturumda bulunmuyorsa, kullanıcı girişi yapmamış demektir
        if (!$user) {
            // Kullanıcı girişi yapmamışsa, örneğin giriş sayfasına yönlendirilebilir
            return redirect()->to('/')->with('message', ['type' => "error", 'text' => "Bir hata meydana geldi !"]);
        }
        // else {
        //     return redirect()->to('/')->with('message', ['type' => "error", 'text' => $user['id']]);
        // }

        // CreditCardModel'i kullanarak kullanıcıya ait kredi kartlarını al
        $creditCardModel = new CreditCardModel();
        $userCreditCards = $creditCardModel->getUserCreditCards($user['id']);

        $ticketModel = new TicketModel();
        $soldTickets = $ticketModel->getTicketsByStatusAndUserID('sold', $user['id']);
        $reservedTickets = $ticketModel->getTicketsByStatusAndUserID('reserved', $user['id']);
        $cancelledTickets = $ticketModel->getTicketsByStatusAndUserID('cancelled', $user['id']);
        $userTickets = [
            'sold' => $soldTickets,
            'reserved' => $reservedTickets,
            'cancelled' => $cancelledTickets
        ];

        // View'e gönderilecek verileri oluştur
        $data = [
            'title' => "Profilim",
            'credit_cards' => $userCreditCards,
            'tickets' => $userTickets,
            'user' => $user
        ];
        return view("pages/user_profile", $data);
    }

    public function myTickets()
    {
        $data['title'] = "Biletlerim";
        $data['cities'] = CityModel::getCities();
        $qrCode = new QRCode;

        // TicketModel'i kullanarak biletleri al
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->getTicketsWithDetails(session()->get('user')['id']);

        // Her bir bilet için QR kodunu oluştur ve bilet nesnesine ekle
        foreach ($tickets as &$ticket) {
            // QR kod oluşturma
            $qrCode = new QRCode;
            $ticket['qrCode'] = $qrCode->render($ticket['pnr_code']);
            unset($qrCode);
        }

        // Görünüm dosyasına verileri gönder
        $data['tickets'] = $tickets;

        // Biletlerin listelendiği sayfayı göster
        return view('pages/my_tickets', $data);
    }

    public function search()
    {
        // Form verilerini al
        $departureCity = $this->request->getGet('departure_city');
        $arrivalCity = $this->request->getGet('arrival_city');
        $departureDate = $this->request->getGet('departure_date');

        // Veritabanında gerekli sorguyu yap
        $ticketModel = new TicketModel();
        $tickets = $ticketModel->searchTickets($departureCity, $arrivalCity, $departureDate);
        foreach ($tickets as &$ticket) {
            // QR kod oluşturma
            $qrCode = new QRCode;
            $ticket['qrCode'] = $qrCode->render($ticket['pnr_code']);
            unset($qrCode);
        }

        $data['title'] = 'Biletlerim';
        $data['tickets'] = $tickets;
        $data['cities'] = CityModel::getCities();
        // Sonuçları görüntüle
        return view('pages/my_tickets', $data);
    }
}
