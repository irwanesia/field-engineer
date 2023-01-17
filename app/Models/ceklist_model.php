<?php

namespace App\Models;

use CodeIgniter\Model;

class Ceklist_model extends Model
{
    protected $table      = 'ceklist';
    protected $primaryKey = 'id_ceklist';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['kode_brg', 'nama_brg', 'keterangan', 'satuan', 'harga'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}