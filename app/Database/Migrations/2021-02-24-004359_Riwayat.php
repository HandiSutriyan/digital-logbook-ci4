<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Riwayat extends Migration
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
			'id_alat'	=> [
				'type'       => 'INT',
				'constraint' => 10,
			],
			'kondisi_before'	=> [
				'type'       => 'TEXT',
			],
			'kondisi_after'	=> [
				'type'       => 'TEXT',
			],
			'kondisi_catatan'	=> [
				'type'      => 'TEXT',
				'null'		=> true
			],
			'tujuan'	=> [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'peminjam'	=> [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'kode_pinjam'	=> [
				'type'       => 'VARCHAR',
				'constraint' => '6',
			],
			'created_by'	=> [
				'type'       => 'VARCHAR',
				'constraint' => '100',
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
		$this->forge->createTable('riwayat');
	}

	public function down()
	{
		$this->forge->dropTable('riwayat');
	}
}
