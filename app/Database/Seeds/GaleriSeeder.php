<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Kunjungan Bandar Lampung',
                'gambar' => 'foto1.jpg'
            ],
            [
                'judul' => 'Sholat Jumaat Bersama',
                'gambar' => 'foto2.png'
            ]
        ];

        $this->db->table('galeri')->insertBatch($data);
    }
}
