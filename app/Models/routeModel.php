<?php

namespace App\Models;

use CodeIgniter\Model;

class RouteModel extends Model
{
    protected $table      = 'routes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['bus_id', 'departure_city_id', 'arrival_city_id', 'departure_time', 'arrival_time', 'price', 'departure_date'];

    public static function getRoutesWithCityNames($id = null)
    {
        // CityModel ve RouteModel'i yükleyin
        $routeModel = new RouteModel();

        // Sorgu oluştur
        $query = $routeModel->db->table('routes')
            ->select('routes.id as route_id, routes.departure_time, routes.arrival_time, routes.bus_id, routes.price, 
            routes.departure_date,
            c1.city_name AS departure_city, c2.city_name AS arrival_city, buses.*')
            ->join('cities AS c1', 'c1.city_plate = routes.departure_city_id')
            ->join('cities AS c2', 'c2.city_plate = routes.arrival_city_id')
            ->limit(12)
            ->join('buses', 'buses.id = routes.bus_id');

        // Id parametresi verilmişse sorguyu filtrele
        if ($id !== null) {
            $query->where('routes.id', $id);
        }

        // Sonucu al ve dizi olarak döndür
        return $query->get()->getResultArray();
    }

    public static function searchRoutes($departure_city_id = null, $arrival_city_id = null, $departure_date = null)
    {
        // RouteModel'i yükleyin
        $routeModel = new RouteModel();

        // Sorgu oluştur
        $query = $routeModel->db->table('routes')
            ->select('routes.id as route_id, routes.departure_city_id, routes.arrival_city_id, routes.departure_time, routes.arrival_time, routes.bus_id, routes.price, 
        routes.departure_date,
        c1.city_name AS departure_city, c2.city_name AS arrival_city, buses.*')
            ->join('cities AS c1', 'c1.city_plate = routes.departure_city_id')
            ->join('cities AS c2', 'c2.city_plate = routes.arrival_city_id')
            ->join('buses', 'buses.id = routes.bus_id');

        // Gerekirse sorguyu filtrele
        if ($departure_city_id !== null) {
            $query->where('routes.departure_city_id', $departure_city_id);
        }
        if ($arrival_city_id !== null) {
            $query->where('routes.arrival_city_id', $arrival_city_id);
        }
        if ($departure_date !== null) {
            $query->where('routes.departure_date', $departure_date);
        }

        // Sonucu al ve dizi olarak döndür
        return $query->get()->getResultArray();
    }



    public static function getRoutesWithCityID()
    {
        $routeModel = new RouteModel();
        $routes = $routeModel->findAll();
        return $routes;
    }

    public static function getTopRoutes($limit = 12)
    {
        $routeModel = new RouteModel();

        // Rotaları alırken city_name'leri ile eşleşen şehirleri alın
        return $routeModel->db->table('routes')
            ->select('routes.id, routes.departure_time, routes.arrival_time, routes.bus_id, routes.price, 
                routes.departure_date,
                c1.city_name AS departure_city, c2.city_name AS arrival_city')
            ->join('cities AS c1', 'c1.city_plate = routes.departure_city_id')
            ->join('cities AS c2', 'c2.city_plate = routes.arrival_city_id')
            ->limit($limit)
            ->get()
            ->getResultArray();
    }
}
