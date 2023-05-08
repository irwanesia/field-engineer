<?php

namespace App\Models;

use CodeIgniter\Model;

class QrCode_model extends Model
{
    protected $table      = 'qrcode_rak_it';
    protected $primaryKey = 'id_qrcode';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['label', 'slug', 'qrcode', 'created_at', 'updated_at', 'delete_at'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function getDataRakIT()
    {
        $query = $this->db->table("qrcode_rak_it as qr")
            ->select('qr.*, rt.distro, rt.lantai')
            ->join('rak_it as rt', 'qr.id_rakit = rt.id_rakit')
            ->get()->getResultArray();
        return $query;
    }
}
