<?php

namespace App\Models;

use CodeIgniter\Model;

class RouteModel extends Model
{
    protected $table      = 'routes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['bus_id', 'departure_city', 'arrival_city', 'departure_time', 'arrival_time', 'price'];

    public static function getRoutesWithCityNames()
    {
        // CityModel ve RouteModel'i yükleyin
        $routeModel = new RouteModel();

        // Rotaları alırken city_name'leri ile eşleşen şehirleri alın
        return $routeModel->db->table('routes')
            ->select('routes.id, routes.departure_time, routes.arrival_time, routes.bus_id, routes.price, 
                c1.city_name AS departure_city, c2.city_name AS arrival_city')
            ->join('cities AS c1', 'c1.id = routes.departure_city_id')
            ->join('cities AS c2', 'c2.id = routes.arrival_city_id')
            ->limit(10)
            ->get()
            ->getResultArray();
    }

    public static function getRoutesWithCityID()
    {
        $routeModel = new RouteModel();
        $routes = $routeModel->findAll();
        return $routes;
    }

    public static function getTopRoutes($limit = 12) {
        $routeModel = new RouteModel();

        // Rotaları alırken city_name'leri ile eşleşen şehirleri alın
        return $routeModel->db->table('routes')
            ->select('routes.id, routes.departure_time, routes.arrival_time, routes.bus_id, routes.price, 
                c1.city_name AS departure_city, c2.city_name AS arrival_city')
            ->join('cities AS c1', 'c1.id = routes.departure_city_id')
            ->join('cities AS c2', 'c2.id = routes.arrival_city_id')
            ->limit($limit)
            ->get()
            ->getResultArray();
    }
}
