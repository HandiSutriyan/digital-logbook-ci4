<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Riwayat extends Migration
{
	public function up()
	{
		$this->forge->addField([]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('riwayat');
	}

	public function down()
	{
		$this->forge->dropTable('riwayat');
	}
}
