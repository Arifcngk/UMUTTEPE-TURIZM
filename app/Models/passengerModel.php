<?php

namespace App\Models;

use CodeIgniter\Model;

class PassengerModel extends Model
{
    protected $table      = 'passengers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'tc_id', 'fare_id'];
}
