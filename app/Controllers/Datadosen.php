<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\DosenModel;

class Datadosen extends BaseController
{
    public function index()
    {
        // membuat instan kelas dari DosenModel
        $this->datadosen = new DosenModel();
        $data['datadosen'] = $this->datadosen->findAll();

        echo view('datadosen/index', $data);
    }
}
