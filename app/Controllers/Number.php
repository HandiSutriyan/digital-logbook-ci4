<?php

namespace App\Controllers;
use App\Models\RiwayatModel;
use App\Models\RoleModel;

class Number extends BaseController
{
    protected $riwayatModel;
    protected $roleModel;
    public function __construct(){
        $this->riwayatModel = new RiwayatModel;
        $this->roleModel = new RoleModel;
    }
    public function index()
	{

        $data =[
            'title' => 'Cek Data',
            'riwayat'=> '' 
        ];
        return view('pages/number-input', $data);
    }
    public function cari($key = null){
        $session = session();
        if($key){
            $kode = $key;
        }else{
            $kode = $this->request->getVar('kode_pinjam');
        }
        $riwayat = $this->riwayatModel->search($kode);
        $data =[
            'title' => 'Cek Data',
            'riwayat'=> $riwayat 
        ];
        //dd($riwayat);
        if($riwayat){
            return view('pages/number-input', $data);
        }else {
            $session->setFlashdata('msg', 'Data tidak ditemukan');
            return redirect()->to('/number');
        }
    }

    public function detail($kode,$id_alat){
        $detail = $this->riwayatModel->searchById($id_alat);
        $data = [
            'title' => 'Riwayat Alat',
            'last_code' => $kode,
            'data_riwayat'=> $detail
        ];
        return view('pages/detail-alat', $data);
    }
    
}
