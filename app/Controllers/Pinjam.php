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
    
    public function cariRiwayat($kode = null){
        if($kode){
            $kode_pinjam = $kode;
        }else{
            $kode_pinjam = $kode = $this->request->getVar('kode_pinjam');
        }
        $data_r = $this->riwayatModel->search($kode);
        //dd($data_r);
        $data = [
            'title'=>'Pengembalian Alat',
            'data_riwayat' => $data_r
        ];
        return view('pages/peminjaman/kembali', $data);
    }

    public function pinjamAlat(){
        $alat = $this->alatModel->findAll();
        $data =[
            'title' => 'Pinjam Alat',
            'data_alat' => $alat
        ];
		return view('pages/peminjaman/pinjam', $data);
    }

    public function kembaliAlat(){
        $data = [
            'title'=>'Data Peminajaman',
            'data_riwayat' => '',
        ];
        return view('pages/peminjaman/kembali', $data);
    }

    public function kembaliSave($id){
        //$id =  $this->request->getVar('riwayat_id');
        $session = session();
        $edit = [
            'id_riwayat'=>$id,
            'id_alat'=> $this->request->getVar('id_alat'),
            'tujuan'=> $this->request->getVar('tujuan'),
            'peminjam'=> $this->request->getVar('peminjam'),
            'kondisi_before'=> $this->request->getVar('kondisi_before'),
            'kondisi_after'=> $this->request->getVar('kondisi_after'),
            'kondisi_catatan'=> $this->request->getVar('kondisi_catatan'),
            'kode_pinjam'=> $this->request->getVar('kode_pinjam'),
            'created_by'=> $session->get('user_role')
        ];
        //dd($edit);
        $this->riwayatModel->save($edit);
        return redirect()->to('/pinjam/caririwayat/'.$this->request->getVar('kode_pinjam'));
        //return view('pages/peminjaman/kembali', $data);
    }

    public function save(){

        $session = session();
        helper('text');
        $kode = random_string('alnum', 6);
        $id_alat= $this->request->getVar('id_alat');

		foreach($id_alat as $i){
            $save = [
                'id_alat' => $i,
                'tujuan'=> $this->request->getVar('tujuan'),
                'peminjam'=> $this->request->getVar('peminjam'),
                'kondisi_before'=> $this->request->getVar('kondisi_before'),
                'kondisi_after'=> '',
                'kondisi_catatan'=> '',
                'kode_pinjam'=> $kode,
                'created_by'=> $session->get('user_role'),
            ];
            //dd($save);
            $this->riwayatModel->save($save);
        }
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
