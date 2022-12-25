<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Kalkulator extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kalkulator Harga Jual',
        ];
        return view('kalkulator/harga_jual', $data);
    }
}