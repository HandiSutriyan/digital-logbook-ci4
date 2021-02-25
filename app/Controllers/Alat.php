<?php

namespace App\Controllers;
use App\Models\AlatModel;

class Alat extends BaseController
{
    protected $alatModel;
    public function __construct(){
        $this->alatModel = new AlatModel;
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
}
