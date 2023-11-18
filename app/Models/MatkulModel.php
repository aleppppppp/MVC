<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table            = 'datamatkul';
    protected $primaryKey       = 'IDMatkul';
    protected $returnType       = 'object';
    protected $allowedFields    = ['NamaMatkul', 'Kuota'];
}
