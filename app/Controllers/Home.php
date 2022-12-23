<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    protected $homeModel;
    public function __construct()
    {
        $this->homeModel = new HomeModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Hesty Bakeshop',
            'kue' => $this->homeModel->getKue(),
            'snack' => $this->homeModel->getSnack()
        ];
        return view('index', $data);
    }
}