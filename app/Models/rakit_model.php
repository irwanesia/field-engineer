<?php

namespace App\Models;

use CodeIgniter\Model;

class RakIT_model extends Model
{
    protected $table      = 'rak_it';
    protected $primaryKey = 'id_rakit';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['distro', 'lantai', 'created_at', 'updated_at', 'delete_at'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}
