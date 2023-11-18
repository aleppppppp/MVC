<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\MahasiswaModel;

class Datamahasiswa extends BaseController
{
    protected $datamahasiswa;

    public function __construct()
    {
        // Initialize the model in the constructor
        $this->datamahasiswa = new MahasiswaModel();
    }
    public function index()
    {
        // membuat instan kelas dari MahasiswaModel
        $this->datamahasiswa = new MahasiswaModel();
        $data['datamahasiswa'] = $this->datamahasiswa->findAll();

        echo view('datamahasiswa/index', $data);
    }
    public function add()
    {
        return view('datamahasiswa/form_mahasiswa');
    }

    public function create()
    {
        // Validation rules
        $validationRules = [
            'NIM' => 'required|min_length[5]',
        ];

        // Set custom error messages
        $validationMessages = [
            'NIM' => [
                'required' => 'NIM tidak boleh kosong',
                'min_length' => 'NIM minimal 3 karakter',
            ],
        ];

        // Run validation
        $isValid = $this->validate($validationRules, $validationMessages);

        if (!$isValid) {
            // If validation fails, load the form view with validation errors
            return view('datamahasiswa/form_mahasiswa', ['validation' => $this->validator]);
        }

        // If validation passes, insert data into the database
        $data = $this->request->getPost();
        $this->datamahasiswa->insert($data);

        // Redirect to the index page
        return redirect()->to('datamahasiswa');
    }
}