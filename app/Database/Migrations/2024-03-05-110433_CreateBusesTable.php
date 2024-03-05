<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBusesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'bus_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'plate_number' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unique' => true,
            ],
            'model' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'seat_capacity' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'seat_layout' => [
                'type' => 'ENUM',
                'constraint' => ['2+1', '2+2'],
                'default' => '2+2',
            ],
        ]);
        $this->forge->addKey('bus_id', true);
        $this->forge->createTable('buses');
    }

    public function down()
    {
        $this->forge->dropTable('buses');
    }
}
