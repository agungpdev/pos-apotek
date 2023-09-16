<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Locations extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'location_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'location_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('location_id', true);
        $this->forge->createTable('location');
    }

    public function down()
    {
        $this->forge->dropTable('location');
    }
}
