<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datadosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'NIDN'=>[
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'Nama'=>[
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'MataKuliah'=>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addPrimaryKey('NIDN');
        $this->forge->createTable('datadosen');
    }

    public function down()
    {
        $this->forge->dropTable('datadosen');
    }
}
