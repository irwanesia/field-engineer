<?php

namespace App\Models;

use CodeIgniter\Model;

class Juklak_model extends Model
{
    protected $table      = 'juklak';
    protected $primaryKey = 'id_juklak';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['tgl','slug', 'judul', 'kategori','isi_juklak', 'create_by', 'created','updated','modified'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}