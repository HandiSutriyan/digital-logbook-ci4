<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AlatSeeder extends Seeder
{
        public function run()
        {
                $data = [
                    [
                        'alat_nama' => 'Portable Pressure Calibrator',
                        'alat_merek' => 'Fluke',
                        'alat_tipe'    => '719100G',
                        'alat_sernum' => '3185162',
                        'alat_kategori' => 'pj_tkn',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ],
                    [
                        'alat_nama' => 'Rain Gauge Test Equipment with Combilog 1022',
                        'alat_merek' => 'Theodor Friedrichs',
                        'alat_tipe'    => '8802.0000',
                        'alat_sernum' => '1033',
                        'alat_kategori' => 'pj_ch',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ]
                        
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO user (user_name, user_nip, user_email, user_role, user_password, created_at, updated_at) VALUES(:user_name:, :user_nip:, :user_email:, :user_role:, :user_password:, :created_at:, :updated_at:)", $data);

                // Using Query Builder
                 $this->db->table('data_alat')->insertBatch($data);
        }
}