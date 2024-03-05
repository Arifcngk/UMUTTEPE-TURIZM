<?php
namespace App\Models;

use CodeIgniter\Model;

class BusCompanyModel extends Model
{
    protected $table      = 'bus_companies';
    protected $primaryKey = 'id';
    protected $allowedFields = ['company_name', 'created_at', 'updated_at'];
}
