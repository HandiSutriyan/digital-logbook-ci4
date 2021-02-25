<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\RiwayatModel;
use App\Models\RoleModel;
use App\Models\AlatModel;
 
class Dashboard extends Controller
{
    protected $alatModel;
    protected $riwayatModel;
    protected $roleModel;
    public function __construct(){
        $this->alatModel = new AlatModel;
        $this->riwayatModel = new RiwayatModel;
        $this->roleModel = new RoleModel;
    }
    public function index()
    {
        $session = session();
        $totalDataAlat = $this->alatModel->getTotalData();
		$totalDataRiwayat = $this->riwayatModel->getTotalData();
		$totalDataRole = $this->roleModel->getTotalData();
        $data =[
            'title' => 'Dashboard',
            'session' => $session,
            'totalDataAlat'=> $totalDataAlat,
			'totalDataRiwayat' => $totalDataRiwayat,
			'totalDataRole' => $totalDataRole
        ];
        return view('pages/dashboard', $data);
    }
}