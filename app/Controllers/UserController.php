<?php
namespace App\Controllers;

use App\Models\TicketModel;
use App\Models\CityModel;
use chillerlan\QRCode\QRCode;

class UserController extends BaseController
{
    public function index()
    {
       $data["title"] = "Profil"; 
       return view("pages/user_profile", $data);
    }

    public function myTickets(){
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
} 
?>