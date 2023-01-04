<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_produk', 'slug', 'id_kategori', 'harga', 'gambar'];

    public function getProduk($slug = false)
    {
        if ($slug == false) {
            $this->select('*')->join('kategori_produk', 'kategori_produk.id_kategori=produk.id_kategori');
            return $this->findAll();
        }
        $this->select('*')->join('kategori_produk', 'kategori_produk.id_kategori=produk.id_kategori');
        return $this->where(['slug' => $slug])->first();
    }
}