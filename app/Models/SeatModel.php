<?php

namespace App\Models;

use CodeIgniter\Model;

class SeatModel extends Model
{
    protected $table      = 'seats';
    protected $primaryKey = 'id';
    protected $allowedFields = ['route_id', 'seat_number', 'status', 'gender'];
}
