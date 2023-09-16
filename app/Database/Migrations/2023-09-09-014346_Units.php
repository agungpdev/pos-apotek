<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Units extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'unit_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'unit_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('unit_id', true);
        $this->forge->createTable('unit');
    }

    public function down()
    {
        $this->forge->dropTable('unit');
    }
}
