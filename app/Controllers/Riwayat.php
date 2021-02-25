<?php

namespace App\Controllers;
use App\Models\RiwayatModel;

class Riwayat extends BaseController
{
    protected $riwayatModel;
    public function __construct(){
        $this->riwayatModel = new RiwayatModel;
    }
    public function index()
	{
		$riwayatData = $this->riwayatModel->getAllData();
        $data = [
            'title'=>'Data Riwayat',
            'data_riwayat' => $riwayatData
        ];
        return view('pages/riwayat/index', $data);
	}
}
