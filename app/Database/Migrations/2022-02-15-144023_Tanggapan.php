<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Tanggapan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tanggapan' => [
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ],

            'id_pengaduan' => [
                'type' => 'int',
                'constraint' => 11,
            ],

            'tgl_tanggapan' => [
                'type' => 'date',
            ],

            'tanngapan' => [
                'type' => 'text',
            ],

            'id_petugas' => [
                'type' => 'int',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id_tanggapan', true);
        $this->forge->createTable('tanggapan');
    }

    public function down()
    {
        $this->forge->dropTable('tanggapan');
    }
}
