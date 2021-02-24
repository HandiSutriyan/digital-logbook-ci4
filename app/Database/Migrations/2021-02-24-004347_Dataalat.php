<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dataalat extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'alat_nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'alat_merek'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'alat_tipe'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'alat_sernum'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'alat_kategori'       => [
				'type'       => 'VARCHAR',
				'constraint' => '10',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('data_alat');
	}

	public function down()
	{
		$this->forge->dropTable('data_alat');
	}
}
