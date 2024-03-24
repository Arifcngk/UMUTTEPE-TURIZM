<?php

namespace App\Models;

use CodeIgniter\Model;

class FareModel extends Model
{
    protected $table = 'fares';
    protected $primaryKey = 'id';
    protected $allowedFields = ['rate', 'fare_name'];

    // Eğer zaman damgası sütunlarınız varsa, bunları belirtin
    protected $useTimestamps = false;
}
