<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komik extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'sampul' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('komik');
    }

    public function down()
    {
        //
        $this->forge->dropTable('komik');
    }
}
