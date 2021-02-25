<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatModel extends Model
{
	protected $table = 'data_alat';
	protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $allowedFields = ['alat_nama','alat_merek','alat_tipe','alat_sernum','alat_kategori', 'alat_status'];

	public function getAlatbyId($id){
		return $this->table('data_alat')->where(['id'=> $id])->first();
	}
}

