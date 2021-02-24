<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class RiwayatSeed extends Seeder
{
        public function run()
        {
                $data = [
                    [
                        'id_alat' => 1,
                        'kondisi_before' => 'Baik',
                        'kondisi_after' => 'Baik',
                        'kondisi_catatan' => 'Baik',
                        'tujuan' => 'Kalibrasi AWS Soekarno-Hatta',
                        'peminjam' => 'Asnawi',
                        'kode_pinjam' => '123232',
                        'created_by'=> 'admin',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ],
                    [
                        'id_alat' => 2,
                        'kondisi_before' => 'Baik',
                        'kondisi_after' => 'Baik',
                        'kondisi_catatan' => 'Baik',
                        'tujuan' => 'Kalibrasi AWS Serang',
                        'peminjam' => 'Asnawi',
                        'kode_pinjam' => '123233',
                        'created_by'=> 'pj_tkn',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                    ]
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO user (user_name, user_nip, user_email, user_role, user_password, created_at, updated_at) VALUES(:user_name:, :user_nip:, :user_email:, :user_role:, :user_password:, :created_at:, :updated_at:)", $data);

                // Using Query Builder
                 $this->db->table('riwayat')->insertBatch($data);
        }
}