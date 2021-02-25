<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
	protected $table = 'role_data';
	protected $primaryKey = 'role_id';
	protected $useTimestamps = true;
	protected $allowedFields = ['role_name','role_code'];
	
	public function getKodeAlat($kode){
		return $this->table('role_data')->where(['role_code'=> $kode])->first();
	}
	public function getTotalData(){
        return $this->table('role_data')->countAllResults();
    }
}
