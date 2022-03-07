<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Masyarakat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nik' => [
                'type' => 'char',
                'constraint' => 16,
                'auto_increment' => true,
            ],

            'nama' => [
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
        ]);
        $this->forge->addKey('nik', true);
        $this->forge->createTable('masyarakat');
    }

    public function down()
    {
        $this->forge->dropTable('masyarakat');
    }
}
