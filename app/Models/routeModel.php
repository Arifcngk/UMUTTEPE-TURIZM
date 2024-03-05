<?php

namespace App\Models;

use CodeIgniter\Model;

class RouteModel extends Model
{
    protected $table      = 'routes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['bus_id', 'departure_city', 'arrival_city', 'departure_time', 'arrival_time', 'price', 'created_at', 'updated_at'];
}
?>