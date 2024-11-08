<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Desa extends Migration
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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('desa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('desa');
    }
}
