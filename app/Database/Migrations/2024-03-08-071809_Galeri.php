<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galeri extends Migration
{
    public function up()
    {
        // membuat table galeri
        $this->forge->addField([
            'id_galeri' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);

        $this->forge->addKey('id_galeri');
        $this->forge->createTable('galeri');
    }

    public function down()
    {
        // membuat drop table
        $this->forge->dropTable('galeri');
    }
}
