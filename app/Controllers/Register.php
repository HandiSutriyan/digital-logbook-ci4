<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'user_name'          => 'required|min_length[3]|max_length[20]',
            'user_email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.user_email]',
            'user_password'      => 'required|min_length[6]|max_length[200]',
            'user_nip'           => 'required|min_length[3]|max_length[50]',
            'user_role'          => 'required|min_length[3]|max_length[10]',
            'confpassword'  => 'matches[user_password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('user_name'),
                'user_email'    => $this->request->getVar('user_email'),
                'user_nip'    => $this->request->getVar('user_nip'),
                'user_role'    => $this->request->getVar('user_role'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
 
}