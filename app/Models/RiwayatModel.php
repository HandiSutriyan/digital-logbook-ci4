<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
	protected $table = 'riwayat';
	protected $primaryKey = 'id_riwayat';
	protected $useTimestamps = true;
	protected $allowedFields = ['id_alat','kondisi_before','kondisi_after', 'kondisi_catatan', 'tujuan', 'peminjam', 'kode_pinjam','created_by'];
	
	public function getAllData(){
		return $this->table('riwayat')->join('data_alat', 'data_alat.id = riwayat.id_alat', 'left')->paginate(10);
	}

	public function search($kode_pinjam){
		$data_alat = $this->table('riwayat')->join('data_alat', 'data_alat.id = riwayat.id_alat', 'left')->where(['kode_pinjam'=> $kode_pinjam])->paginate(10);
		return $data_alat;
	}
	public function searchById($id){
		$data_alat = $this->table('riwayat')->join('data_alat', 'data_alat.id = riwayat.id_alat', 'left')->where(['id_alat'=> $id])->paginate(10);
		return $data_alat;
	}

	public function getTotalData(){
        return $this->table('riwayat')->groupBy("kode_pinjam")->countAllResults();
    }

}
