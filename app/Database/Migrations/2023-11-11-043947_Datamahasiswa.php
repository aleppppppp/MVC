<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datamahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'NIM' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'Nama' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'Jenis_Kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'JSemester' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true,
            ],
            'Dospem' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addPrimaryKey('NIM');
        $this->forge->createTable('datamahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('datamahasiswa');
    }
}
