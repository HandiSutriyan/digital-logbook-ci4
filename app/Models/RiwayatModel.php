<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
	protected $table = 'riwayat';
	protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $allowedFields = ['id_alat','kondisi_before','kondisi_after', 'kondisi_catatan', 'tujuan', 'kode_pinjam','created_by'];
	
	public function getAllData(){
		return $this->table('riwayat')->join('data_alat', 'data_alat.id = riwayat.id_alat', 'left')->paginate(10);
	}

	public function search($kode_pinjam){
		$data_riwayat ='';
		$data_alat = $this->table('riwayat')->join('data_alat', 'data_alat.id = riwayat.id_alat', 'left')->where(['kode_pinjam'=> $kode_pinjam])->first();
		//$data_role = $this->table('role_data')->where(['role_code'=> $data_alat['alat_kategori']])->first();
		if($data_alat){
			$data_riwayat = $this->table('riwayat')->join('data_alat', 'data_alat.id = riwayat.id_alat', 'left')->where(['id_alat'=> $data_alat['id_alat']])->paginate(10);
		}
		//$data_role = $this->table('role_data')->where(['role_code'=> $data_riwayat[0]['alat_kategori']])->first();
		return $data_riwayat;
	}

}
