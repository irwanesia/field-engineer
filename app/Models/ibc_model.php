<?php

namespace App\Models;

use CodeIgniter\Model;

class Ibc_model extends Model
{
    protected $table      = 'report_ibc';
    protected $primaryKey = 'id_report_ibc';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_transaksi', 'tanggal', 'pelaksana', 'lantai', 'titik_lokasi', 'row'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getTanggal()
    {
        // Mendapatkan instance builder untuk tabel yang relevan
        // Asumsikan $this sudah merupakan instance model yang terkait dengan tabel yang diinginkan
        $builder = $this->builder();

        // Menetapkan untuk mengambil data unik/distinct
        $builder->distinct();
        $builder->select('tanggal, pelaksana'); // atau kolom lain yang ingin Anda pilih secara distinct
        
        // Menjalankan query dan mendapatkan hasilnya sebagai array asosiatif
        return $builder->get()->getResultArray();
    }
    
}
