<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'produk';

    public function getKue()
    {
        $this->select('*')->join('kategori_produk', 'kategori_produk.id_kategori=produk.id_kategori');
        return $this->where('produk.id_kategori', '1')->findAll();
    }
    public function getSnack()
    {
        $this->select('*')->join('kategori_produk', 'kategori_produk.id_kategori=produk.id_kategori');
        return $this->where('produk.id_kategori', '2')->findAll();
    }
}