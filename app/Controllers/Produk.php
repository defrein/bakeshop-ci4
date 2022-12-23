<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Produk',
            'produk' => $this->produkModel->getProduk()
        ];
        return view('produk/data_produk', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Produk',
            'validation' => \Config\Services::validation()
        ];

        return view('produk/create', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->getProduk($slug)
        ];


        // jika produk tidak ada di tabel
        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk dengan nama ' . $slug . ' tidak ditemukan.');
        }
        return view('produk/detail', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama_produk' => [
                'rules' => 'required|is_unique[produk.nama_produk]',
                'errors' => [
                    'required' => 'nama produk harus diisi.',
                    'is_unique' => 'nama produk sudah ada'
                ]
            ],
            // validasi kolom lainnya
        ])) {
            return redirect()->to('/produk/create')->withInput();
        }

        // ambil gambar


        $slug = url_title($this->request->getVar('nama_produk'), '-', true);
        $this->produkModel->save([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/produk');
    }
}