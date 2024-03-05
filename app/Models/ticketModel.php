<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $table      = 'tickets';
    protected $primaryKey = 'id';
    protected $allowedFields = ['route_id', 'user_id', 'seat_number', 'created_at'];

    public function getTicketsWithDetails()
    {
        return $this->db->table('tickets')
            ->select('tickets.*, routes.departure_time, routes.arrival_time, departure_city.city_name as departure_city, arrival_city.city_name as arrival_city')
            ->join('routes', 'tickets.route_id = routes.id')
            ->join('cities as departure_city', 'routes.departure_city_id = departure_city.id')
            ->join('cities as arrival_city', 'routes.arrival_city_id = arrival_city.id')
            ->get()
            ->getResultArray();
    }
}
