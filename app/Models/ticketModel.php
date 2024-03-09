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
                user.first_name as name, user.last_name as last_name, buses.plate_number as plate_number')
            ->join('routes', 'tickets.route_id = routes.id')
            ->join('buses', 'routes.bus_id = buses.id')
            ->join('cities as departure_city', 'routes.departure_city_id = departure_city.city_plate', 'left')
            ->join('cities as arrival_city', 'routes.arrival_city_id = arrival_city.city_plate', 'left')
            ->join('users as user', 'tickets.user_id = user.id', 'left'); // left join eklendi
        if (!empty($userid)) {
            $query->where('tickets.user_id', $userid);
        }
    
        return $query->get()->getResultArray();
    }

    public function getTicketsByUserID($userid) {
        return $this->where('id', $userid)->findAll();
    }
}
