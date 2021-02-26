<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roledata extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'role_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'role_name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '255',
			],
			'role_code'       => [
				'type'       => 'VARCHAR',
				'constraint' => '5',
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
		$this->forge->addKey('id', true);
		$this->forge->createTable('role_data');
	}

	public function down()
	{
		$this->forge->dropTable('role_data');
	}
}
