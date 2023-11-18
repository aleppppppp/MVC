<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table            = 'datadosen';
    protected $primaryKey       = 'NIDN';
    protected $returnType       = 'object';
    protected $allowedFields    = ['Nama', 'MataKuliah'];
}
