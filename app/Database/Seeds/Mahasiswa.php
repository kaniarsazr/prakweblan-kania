<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2057051014',
                'nama'    => 'Kania Ratu Syifa Az Zahra',
                'alamat' => 'Balaraja',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051064',
                'nama'    => 'Irma',
                'alamat' => 'Bukittinggi',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051014',
                'nama'    => 'Lampung',
                'alamat' => 'Saddam',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2057051004',
                'nama'    => 'Indah',
                'alamat' => 'Jakarta',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ]
        ];

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
