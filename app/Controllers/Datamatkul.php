<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\MatkulModel;

class Datamatkul extends BaseController
{
    public function index()
    {
        // membuat instan kelas dari MahasiswaModel
        $this->datamatkul = new MatkulModel();
        $data['datamatkul'] = $this->datamatkul->findAll();

        echo view('datamatkul/index', $data);
    }
}
