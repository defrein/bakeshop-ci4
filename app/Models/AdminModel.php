<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    // protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'nama_admin', 'role'];

    public function getAdmin($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }
        return $this->where(['username' => $username])->first();
    }

    public function countAdmin()
    {
        return $this->countAll();
    }
}