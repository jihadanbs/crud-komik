<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebPrograming Amikom',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | Web Programing Amikom'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Bandar Lampung',
                    'no_hp' => '088215178312'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Bandung',
                    'no_hp' => '011212131'
                ]
            ]
        ];

        echo view('pages/contact', $data);
    }
}
