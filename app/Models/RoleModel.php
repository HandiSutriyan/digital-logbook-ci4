<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
	protected $table = 'role_data';
	protected $primaryKey = 'id';
	protected $useTimestamps = true;
    protected $allowedFields = ['role_name','role_code'];
}
