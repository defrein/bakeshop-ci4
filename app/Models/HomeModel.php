<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'produk';

    public function getKue()
    {
        $this->select('*');
        return $this->where('kategori', 'kue')->findAll();
    }
    public function getSnack()
    {
        return $this->table('produk')->where('kategori', 'snack')->findAll();
    }
}