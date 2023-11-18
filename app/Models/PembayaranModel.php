<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table            = 'datapembayaran';
    protected $primaryKey       = 'ID_Pembayaran';
    protected $returnType       = 'object';
    protected $allowedFields    = ['NIM', 'Nama_Mhs', 'UKT', 'Status'];
}