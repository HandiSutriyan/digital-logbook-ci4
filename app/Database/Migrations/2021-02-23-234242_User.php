<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'user_name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '255',
			],
			'user_nip'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'user_email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'user_role' => [
				'type' => 'VARCHAR',
				'constraint' => '10',
			],
			'user_password' => [
				'type' => 'VARCHAR',
				'constraint' => '225',
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('user_id', true);
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
