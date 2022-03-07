<?php

namespace App\Controllers;

use App\Models\DataPetugasModel;

class DataPetugas extends BaseController
{
    public function index()
    {
        $petugas  = new DataPetugasModel();
        $data = [
            'title' => 'Data Petugas',
            'petugas' => $petugas->getPetugas()
        ];
        return view('admin/datapetugas', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Petugas';
        echo view('crud-datapetugas/tambah', $data);
    }

    public function simpan()
    {
        $petugas = new DataPetugasModel();
        $data = [
            'id_petugas'    => $this->request->getVar('id_petugas'),
            'nama_petugas'  => $this->request->getVar('nama_petugas'),
            'username'      => $this->request->getVar('username'),
            'password'      => $this->request->getVar('password'),
            'telp'          => $this->request->getVar('telp'),
        ];
        $petugas->simpanPetugas($data);
        return redirect()->to('/datapetugas');
    }

    public function ubah($id)
    {
        $petugas = new DataPetugasModel();
        $data['title'] = 'Edt Data Petugas';
        $data['petugas'] = $petugas->getPetugas($id)->getRow();
        echo view('crud-datapetugas/ubah', $data);
    }

    public function update()
    {
        $petugas = new DataPetugasModel();
        $id = $this->request->getVar('id_petuas');
        $data = [
            'id_petugas'    => $this->request->getVar('id_petugas'),
            'nama_petugas'  => $this->request->getVar('nama_petugas'),
            'username'      => $this->request->getVar('username'),
            'password'      => $this->request->getVar('password'),
            'telp'          => $this->request->getVar('telp'),
        ];
        $petugas->update($id, $data);
        return redirect()->to('/datapetugas');
    }

    public function hapus($id)
    {
        $petugas = new DataPetugasModel();
        $petugas->deleteDataPetugas($id);
        return redirect()->to('/datapetugas');
    }
}
