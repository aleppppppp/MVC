<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\KelasModel;

class Datakelas extends BaseController
{
    public function index()
    {
        // membuat instan kelas dari MahasiswaModel
        $this->datakelas = new KelasModel();
        $data['datakelas'] = $this->datakelas->findAll();

        echo view('datakelas/index', $data);
    }
}