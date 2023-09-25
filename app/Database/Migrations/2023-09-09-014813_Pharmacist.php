<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pharmacist extends Migration
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
            'apoteker' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'no_sik' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pharmacist');
    }

    public function down()
    {
        $this->forge->dropTable('pharmacist');
    }
}
