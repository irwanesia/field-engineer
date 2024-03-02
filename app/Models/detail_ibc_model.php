<?php

namespace App\Models;

use CodeIgniter\Model;

class Detail_ibc_model extends Model
{
    protected $table      = 'detail_ibc';
    protected $primaryKey = 'id_detail_ibc';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_transaksi', 'provider', 'foto_hasil_netmonitor', 'foto_hasil_speedtest', 'keterangan'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    
}
