<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder

{
    public function run()
    {
        $data = [
            [
                'nama' => 'Jihadan Beckhianosyuhada',
                'alamat' => 'Balam',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama' => 'Paino',
                'alamat' => 'Ledok',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama' => 'Yanto',
                'alamat' => 'Kemasan',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];
        //simple query
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );

        //query builder 
        // $this->db->table('orang')->insert($data);
        $this->db->table('orang')->insertBatch($data);
    }
}
