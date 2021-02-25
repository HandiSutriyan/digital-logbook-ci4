<?php

namespace App\Controllers;
use App\Models\AlatModel;
use App\Models\RiwayatModel;

class Pinjam extends BaseController
{
    protected $alatModel;
    protected $riwayatModel;
    public function __construct(){
        $this->alatModel = new AlatModel;
        $this->riwayatModel = new RiwayatModel;
    }
    public function index()
	{
		$data =[
            'title' => 'Peminjaman',
        ];
		return view('pages/peminjaman/index', $data);
    }

    public function pilihAlat(){
        $alatData = $this->alatModel->findAll();
        $data = [
            'title'=>'Pilih Alat',
            'data_alat' => $alatData
        ];
        return view('pages/peminjaman/data-alat', $data);
    }
    
    public function pinjamAlat(){
        //$alat = $this->alatModel->getAlatbyId($id_alat);
        $data =[
            'title' => 'Pinjam Alat',
            'data_alat' => ''
        ];
		return view('pages/peminjaman/pinjam', $data);
    }

    public function kembaliAlat(){
        $riwayatData = $this->riwayatModel->getAllData();
        //dd($riwayatData);
        $data = [
            'title'=>'Data Peminajaman',
            'data_riwayat' => $riwayatData
        ];
        return view('pages/peminjaman/kembali', $data);
    }

    public function save(){
        helper('text');
        $kode = random_string('alnum', 6);

        $save = [
			'id_alat'=> $this->request->getVar('id_alat'),
			'tujuan'=> $this->request->getVar('tujuan'),
			'peminjam'=> $this->request->getVar('peminjam'),
            'kondisi_before'=> $this->request->getVar('kondisi_before'),
            'kondisi_after'=> '',
            'kondisi_catatan'=> '',
            'kode_pinjam'=> $kode
		];
		
		$this->riwayatModel->save($save);
        session()->setFlashdata('pesan','Data berhasil ditambahkan');
        $data_alat = $this->alatModel->getAlatbyId($save['id_alat']);
        $data=[
            'title'=>"Peminjaman Berhasil",
            'data_pinjam'=> $save,
            'data_alat' => $data_alat
        ];
		return view('pages/peminjaman/show-code', $data);
    }
}
