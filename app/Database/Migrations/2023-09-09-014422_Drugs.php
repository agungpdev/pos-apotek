<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class Drugs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'drug_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'code' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
            ],
            'barcode' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'unit' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'location' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'stock_minimum' => [
                'type'       => 'SMALLINT',
                'constraint' => 5,
            ],
            'stock' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'expired' => [
                'type'       => 'DATE',
            ],
            'general_price' => [
                'type'       => 'DOUBLE',
                'null' => true,
            ],
            'doctor_price' => [
                'type'       => 'DOUBLE',
                'null' => true,
            ],
            'recipe_price' => [
                'type'       => 'DOUBLE',
                'null' => true,
            ],
            'description' => [
                'type'       => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('drug_id', true);
        $this->forge->createTable('drug');
    }

    public function down()
    {
        $this->forge->dropTable('drug');
    }
}
