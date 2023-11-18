<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\PembayaranModel;

class Datapembayaran extends BaseController
{
    public function index()
    {
        // membuat instan kelas dari MahasiswaModel
        $this->datapembayaran = new PembayaranModel();
        $data['datapembayaran'] = $this->datapembayaran->findAll();

        echo view('datapembayaran/index', $data);
    }
}