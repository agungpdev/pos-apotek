<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Doctors extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'spesialis' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('doctor');
    }

    public function down()
    {
        //
    }
}
