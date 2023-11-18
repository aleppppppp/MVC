<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table            = 'datamahasiswa';
    protected $primaryKey       = 'NIM';
    protected $returnType       = 'object';
    protected $allowedFields    = ['Nama', 'Jenis_Kelamin', 'Semester', 'Dospem'];
}
