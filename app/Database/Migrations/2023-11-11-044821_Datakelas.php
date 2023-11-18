<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datakelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'IDKelas'=>[
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'RuangKelas'=>[
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'Kapasitas'=>[
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'Fasilitas'=>[
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'Status'=>[
                'type' => 'VARCHAR',
                'constraint' => '25',
            ]

        ]);
        $this->forge->addPrimaryKey('IDKelas');
        $this->forge->createTable('datakelas');
    }

    public function down()
    {
        $this->forge->dropTable('datakelas');
    }
}
