<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengaduan';
    protected $primaryKey       = 'id_pengaduan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pengaduan', 'tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];

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

    public function getPengaduan($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        } else {
            $builder = $this->db->table('pengaduan');
            $builder->select('pengaduan.*');
            $builder->join('masyarakat', 'masyarakat.nik = pengaduan.nik');
            $builder->join('users', 'users.username = masyarakat.username');
            $builder->where('masyarakat.username', $id);

            return $builder->get()->getResultArray();
            // return $this->getWhere(['id_pengaduan' => $id]);
        }
    }

    public function simpanPengaduan($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePengaduan($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, $id);
        return $query;
    }

    public function deletePengaduan($id)
    {
        $query = $this->db->table($this->table)->delete(['id_pengaduan' => $id]);
        return $query;
    }
}
