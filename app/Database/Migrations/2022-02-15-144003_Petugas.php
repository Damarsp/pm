<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Petugas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_petugas' => [
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ],

            'nama_petugas' => [
                'type' => 'varchar',
                'constraint' => 35,
            ],

            'username' => [
                'type' => 'varchar',
                'constraint' => 25,
            ],

            'password' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],

            'telp' => [
                'type' => 'varchar',
                'constraint' => 13,
            ],

            'level' => [
                'type' => 'enum',
                'constraint' => ['admin', 'staff'],
            ]
        ]);
        $this->forge->addKey('id_petugas', true);
        $this->forge->createTable('petugas');
    }

    public function down()
    {
        $this->forge->dropTable('petugas');
    }
}
