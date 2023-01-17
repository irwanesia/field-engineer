<?php

namespace App\Models;

use CodeIgniter\Model;

class LogBook_model extends Model
{
    protected $table      = 'logbook';
    protected $primaryKey = 'id_logbook';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['jam', 'tgl', 'petugas', 'log_pekerjaan', 'note', 'status', 'created', 'updated', 'modified'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
