<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengaduan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengaduan' => [
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ],

            'tgl_pengaduan' => [
                'type' => 'date',
            ],

            'nik' => [
                'type' => 'char',
                'constraint' => 16,
            ],

            'isi_laporan' => [
                'type' => 'text',
            ],

            'foto' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],

            'status' => [
                'type' => 'enum',
                'constraint' => ['belum', 'proses', 'selesai'],
            ],
        ]);
        $this->forge->addKey('id_pengaduan', true);
        $this->forge->createTable('pengaduan');
    }

    public function down()
    {
        $this->forge->dropTable('pengaduan');
    }
}
