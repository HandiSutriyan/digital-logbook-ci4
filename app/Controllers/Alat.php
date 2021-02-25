<?php

namespace App\Controllers;
use App\Models\AlatModel;
use App\Models\RoleModel;

class Alat extends BaseController
{
    protected $alatModel;
    protected $roleModel;
    public function __construct(){
        $this->alatModel = new AlatModel;
        $this->roleModel = new RoleModel;
    }
    public function index()
	{
		$alatData = $this->alatModel->getAlatAll();
        $data = [
            'title'=>'Data Alat',
            'data_alat' => $alatData
        ];
        return view('pages/data-alat/data-alat', $data);
    }
    
    public function create(){
        $roleData = $this->roleModel->findAll();
        $data = [
            'title'=>'Input Alat',
            'data_role' => $roleData
        ];
        return view('pages/data-alat/create', $data);
    }

    public function save(){
        $save = [
            'alat_nama'=> $this->request->getVar('alat_nama'),
            'alat_merek'=> $this->request->getVar('alat_merek'),
            'alat_tipe'=> $this->request->getVar('alat_tipe'),
            'alat_sernum'=> $this->request->getVar('alat_sernum'),
            'alat_kategori'=> $this->request->getVar('alat_kategori'),
        ];
        //dd($save);
        $this->alatModel->save($save);
        session()->setFlashdata('pesan','Data berhasil disimpan');
        return redirect()->to('/alat/create');
    }
}
