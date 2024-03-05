<?php

namespace App\Models;

use CodeIgniter\Model;

class CityModel extends Model
{
    protected $table      = 'cities';
    protected $primaryKey = 'city_plate';
    protected $allowedFields = ['city_name'];

    public static function getCities()
    {
        $cityModel = new CityModel();
        $cities = $cityModel->findAll();

        return $cities;
    }
}
