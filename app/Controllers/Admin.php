<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Admin',
            'admin' => $this->adminModel->getAdmin()
        ];
        return view('admin/data_admin', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Admin',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[admin.username]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'nama_admin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama admin harus diisi.',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.',
                ]
            ],
        ])) {
            return redirect()->to('/admin/create')->withInput();
        }

        $this->adminModel->save([
            'nama_admin' => $this->request->getVar('nama_admin'),
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'id_role' => $this->request->getVar('id_role'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $totalAdmin = $this->adminModel->countAdmin();
        if ($totalAdmin > 1) {
            $this->adminModel->delete($id);
            session()->setFlashdata('pesan', 'Data berhasil dihapus');
            return redirect()->to('/admin');
        } else {
            session()->setFlashdata('pesan', 'Tidak bisa menghapus satu-satunya admin.');
            return redirect()->to('/admin');
        }
    }
}