<?php

namespace App\Models;

use CodeIgniter\Model;

class TanggapanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tanggapan';
    protected $primaryKey       = 'id_tanggapan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_tanggapan', 'id_pengaduan', 'tgl_tanggapan', 'tanggapan', 'id_petugas'];

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

    public function getTanggapan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_tanggapan' => $id]);
        }
    }

    public function simpanTanggapan($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateTanggapan($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, $id);
        return $query;
    }

    public function deleteTanggapan($id)
    {
        $query = $this->db->table($this->table)->delete(['id_pengaduan' => $id]);
        return $query;
    }

    public function getTanggapanStatus()
    {
        $builder = $this->db->table('tanggapan');
        $builder->select('pengaduan.*, tanggapan.*');
        $builder->join('pengaduan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan');
        $builder->where('pengaduan.status !=', 'selesai');

        return $builder->get()->getResultArray();
    }

    public function getAdminHistory()
    {
        $builder = $this->db->table('tanggapan');
        $builder->select('pengaduan.*, tanggapan.*');
        $builder->join('pengaduan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan');
        $builder->where('pengaduan.status', 'selesai');

        return $builder->get()->getResultArray();
    }

    public function getStaffHistory()
    {
        $builder = $this->db->table('tanggapan');
        $builder->select('pengaduan.*, tanggapan.*');
        $builder->join('pengaduan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan');
        $builder->where('pengaduan.status', 'selesai');

        return $builder->get()->getResultArray();
    }

    public function getUserHistory()
    {
        $builder = $this->db->table('tanggapan');
        $builder->select('pengaduan.*, tanggapan.*');
        $builder->join('pengaduan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan');
        $builder->where('pengaduan.status', 'selesai');

        return $builder->get()->getResultArray();
    }
}
