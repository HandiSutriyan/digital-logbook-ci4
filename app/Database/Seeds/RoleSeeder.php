<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class RoleSeeder extends Seeder
{
        public function run()
        {
                $data = [
                    [
                        'role_name' => 'Administrator',
                        'role_code' => 'admin',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ],
                    [
                        'role_name' => 'Alat Kalibrasi Suhu',
                        'role_code' => 'pj_suhu',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ],
                    [
                        'role_name' => 'Alat Kalibrasi Tekanan',
                        'role_code' => 'pj_tkn',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ],
                    [
                        'role_name' => 'Alat Kalibrasi Kelembaban',
                        'role_code' => 'pj_hum',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ],
                    [
                        'role_name' => 'Alat Kalibrasi Curah Hujan',
                        'role_code' => 'pj_ch',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ],
                    [
                        'role_name' => 'Alat Kalibrasi Vibrasi dan Kelistrikan',
                        'role_code' => 'pj_vnk',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ]
                        
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO role_data (role_name, role_code, created_at, updated_at) VALUES(:role_name:, :role_code:, :created_at:, :updated_at:)", $data);

                // Using Query Builder
                //  $this->db->table('role_data')->insert($data);
                 $this->db->table('role_data')->insertBatch($data);
        }
}