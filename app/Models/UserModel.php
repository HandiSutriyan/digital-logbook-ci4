<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'user_id';
	protected $useTimestamps = true;
    protected $allowedFields = ['user_name','user_email', 'user_nip','user_password', 'user_role'];
}
