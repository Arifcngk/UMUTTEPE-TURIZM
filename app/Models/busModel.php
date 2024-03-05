<?php

namespace App\Models;

use CodeIgniter\Model;

class BuseModel extends Model
{
    protected $table      = 'buses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['company_id', 'plate_number', 'model', 'seat_capacity', 'created_at', 'updated_at'];
}
?>