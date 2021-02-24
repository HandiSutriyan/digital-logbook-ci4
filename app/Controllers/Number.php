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
        $kode = $this->request->getVar('kode_pinjam');
        $riwayat = $this->riwayatModel->search($kode);
        dd($riwayat);

        
        $data =[
            'title' => 'Cek Data',
            'data_alat'=>''
        ];
		return view('pages/number-input', $data);
    }
    
}
