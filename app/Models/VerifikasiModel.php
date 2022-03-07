<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifikasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengaduan';
    protected $primaryKey       = 'id_pengaduan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pengaduan', 'tgl_pengaduan', 'nik', 'isi_laporan', 'foto'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getVerifikasi($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_pengaduan' => $id]);
        }
    }

    public function deleteVerifikasi($id)
    {
        $query = $this->db->table($this->table)->delete(['id_pengaduan' => $id]);
        return $query;
    }
}
