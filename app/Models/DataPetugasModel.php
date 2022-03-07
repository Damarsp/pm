<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPetugasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'petugas';
    protected $primaryKey       = 'id_petugas';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_petugas', 'nama_petugas', 'username', 'password', 'telp'];

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

    public function getPetugas($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_petugas' => $id]);
        }
    }

    public function simpanPetugas($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePetugas($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, $id);
        return $query;
    }

    public function deletePetugas($id)
    {
        $query = $this->db->table($this->table)->delete(['id_petugas' => $id]);
        return $query;
    }
}
