<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datamatkul extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'IDMatkul'=>[
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'NamaMatkul'=>[
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'Kuota'=>[
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'Ruang'=>[
                'type' => 'VARCHAR',
                'constraint' => '10',
            ]
            
        ]);
        $this->forge->addPrimaryKey('IDMatkul');
        $this->forge->createTable('datamatkul');
    }

    public function down()
    {
        $this->forge->dropTable('datamatkul');
    }
}
