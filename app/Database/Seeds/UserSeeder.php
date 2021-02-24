<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
        public function run()
        {
                $data = [
                        'user_name' => 'Admin',
                        'user_nip' => '20210112345678',
                        'user_email'    => 'admin@kalibrasi.com',
                        'user_role' => 'admin',
                        'user_password' => password_hash('admin', PASSWORD_DEFAULT),
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO user (user_name, user_nip, user_email, user_role, user_password, created_at, updated_at) VALUES(:user_name:, :user_nip:, :user_email:, :user_role:, :user_password:, :created_at:, :updated_at:)", $data);

                // Using Query Builder
                 $this->db->table('user')->insert($data);
        }
}