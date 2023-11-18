<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table            = 'datakelas';
    protected $primaryKey       = 'IDKelas';
    protected $returnType       = 'object';
    protected $allowedFields    = ['RuangKelas', 'Kapasitas', 'Fasilitas', 'Status'];
}