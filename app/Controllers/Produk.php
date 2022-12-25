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
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/produk/create')->withInput();
        }

        // ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        // apakah tidak ada gambar yg diupload
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            // generate nama gambar random
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan ke folder img
            $fileGambar->move('img', $namaGambar);
        }


        $slug = url_title($this->request->getVar('nama_produk'), '-', true);
        $this->produkModel->save([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/produk');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Data Produk',
            'validation' => \Config\Services::validation(),
            'produk' => $this->produkModel->getProduk($slug)
        ];

        return view('produk/edit', $data);
    }

    public function update($id)
    {
        // cek nama produk
        $produkLama = $this->produkModel->getProduk($this->request->getVar('slug'));
        if ($produkLama['nama_produk'] == $this->request->getVar('nama_produk')) {
            $rule_nama_produk = 'required';
        } else {
            $rule_nama_produk = 'required|is_unique[produk.nama_produk]';
        }

        if (!$this->validate([
            'nama_produk' => [
                'rules' => $rule_nama_produk,
                'errors' => [
                    'required' => 'nama produk harus diisi.',
                    'is_unique' => 'nama produk sudah ada.'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/produk/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('img', $namaGambar);
            if ($this->request->getVar('gambarLama') != 'default.jpg') {
                // hapus file lama
                unlink('img/' . $this->request->getVar('gambarLama'));
            }
        }

        $slug = url_title($this->request->getVar('nama_produk'), '-', true);
        $this->produkModel->save([
            'id_produk' => $id,
            'nama_produk' => $this->request->getVar('nama_produk'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/produk');
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id
        $produk = $this->produkModel->find($id);
        if ($produk['gambar'] != 'default.jpg') {
            //hapus gambar
            unlink('img/' . $produk['gambar']);
        }

        $this->produkModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/produk');
    }
}