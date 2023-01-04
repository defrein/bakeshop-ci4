<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['username', 'password', 'nama_admin', 'id_role'];

    public function getAdmin($username = false)
    {
        if ($username == false) {
            $this->select('*')->join('role_admin', 'role_admin.id_role=admin.id_role');
            return $this->findAll();
        }
        $this->select('*')->join('role_admin', 'role_admin.id_role=admin.id_role');
        return $this->where(['username' => $username])->first();
    }

    public function countAdmin()
    {
        return $this->countAll();
    }
}