<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        $data =[
            'title' => 'Dashboard',
            'session' => $session
        ];
        return view('pages/dashboard', $data);
    }
}