<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRoutesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'route_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'departure_city_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'arrival_city_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'departure_time' => [
                'type' => 'DATETIME',
            ],
            'arrival_time' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('route_id', true);
        $this->forge->createTable('routes');
        $this->forge->addForeignKey('departure_city_id', 'cities', 'city_id');
        $this->forge->addForeignKey('arrival_city_id', 'cities', 'city_id');
    }

    public function down()
    {
        $this->forge->dropTable('routes');
    }
}
