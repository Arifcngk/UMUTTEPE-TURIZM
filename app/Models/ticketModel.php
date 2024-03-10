<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $table      = 'tickets';
    protected $primaryKey = 'id';
    protected $allowedFields = ['route_id', 'user_id', 'seat_number', 'created_at'];

    public function getTicketsWithDetails($userid = "")
    {
        $query = $this->db->table('tickets')
            ->select('tickets.*, routes.departure_time, routes.arrival_time, routes.departure_date, 
                departure_city.city_name as departure_city, arrival_city.city_name as arrival_city, 
                passenger.first_name as name, passenger.last_name as last_name, passenger.passenger_type as passenger_type, buses.plate_number as plate_number')
            ->join('routes', 'tickets.route_id = routes.id')
            ->join('buses', 'routes.bus_id = buses.id')
            ->join('cities as departure_city', 'routes.departure_city_id = departure_city.city_plate', 'left')
            ->join('cities as arrival_city', 'routes.arrival_city_id = arrival_city.city_plate', 'left')
            ->join('passengers as passenger', 'tickets.passenger_id = passenger.id', 'left'); // left join eklendi
        if (!empty($userid)) {
            $query->where('tickets.user_id', $userid);
        }

        return $query->get()->getResultArray();
    }

    public function searchTickets($departureCity, $arrivalCity, $departureDate)
    {
        $query = $this->db->table('tickets')
            ->select('tickets.*, routes.departure_time, routes.arrival_time, routes.departure_date, 
            departureCity.city_name as departure_city, arrivalCity.city_name as arrival_city, 
            passenger.first_name as name, passenger.last_name as last_name, passenger.passenger_type as passenger_type, buses.plate_number as plate_number')
            ->join('routes', 'tickets.route_id = routes.id')
            ->join('buses', 'routes.bus_id = buses.id')
            ->join('cities as departureCity', 'routes.departure_city_id = departureCity.city_plate', 'left')
            ->join('cities as arrivalCity', 'routes.arrival_city_id = arrivalCity.city_plate', 'left')
            ->join('passengers as passenger', 'tickets.passenger_id = passenger.id', 'left');

        // Eğer departureCity dolu ise where koşulunu ekle
        if (!empty($departureCity)) {
            $query->where('routes.departure_city_id', $departureCity);
        }

        // Eğer arrivalCity dolu ise where koşulunu ekle
        if (!empty($arrivalCity)) {
            $query->where('routes.arrival_city_id', $arrivalCity);
        }

        // Eğer departureDate dolu ise where koşulunu ekle
        if (!empty($departureDate)) {
            $query->where('routes.departure_date', $departureDate);
        }

        return $query->get()->getResultArray();
    }


    public function getTicketsByUserID($userid)
    {
        return $this->where('id', $userid)->findAll();
    }
}
