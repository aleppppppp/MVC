<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datapembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'ID_Pembayaran'=>[
            'type' => 'VARCHAR',
            'constraint' => '10',
        ],
        'NIM'=>[
            'type' => 'VARCHAR',
            'constraint' => '12',
        ],
        'Nama_Mhs'=>[
            'type' => 'VARCHAR',
            'constraint' => '40',
        ],
        'UKT'=>[
            'type' => 'VARCHAR',
            'constraint' => '200',
        ],
        'Status'=>[
            'type' => 'VARCHAR',
            'constraint' => '20',
        ]
    ]);
    $this->forge->addPrimaryKey('No');
    $this->forge->createTable('datapembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('datapembayaran');
    }
}
