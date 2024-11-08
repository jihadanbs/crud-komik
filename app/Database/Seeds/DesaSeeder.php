<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DesaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Ledok'
            ],
            [
                'nama' => 'Kenokorejo'
            ]
        ];

        $this->db->table('desa')->insertBatch($data);
    }
}
