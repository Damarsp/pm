<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class Pengaduan extends BaseController
{
    public function index()
    {
        $pengaduan  = new PengaduanModel();
        $data = [
            'title' => 'Pengaduan Masyarakat',
            'pengaduan' => $pengaduan->getPengaduan(user()->username)
        ];
        return view('user/pengaduan', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tulis Isi Laporan';
        echo view('crud-pengaduan/tambah', $data);
    }

    public function simpan()
    {
        $pegaduan = new PengaduanModel();

        $file = $this->request->getFile('foto');
        $filename = $file->getRandomName();

        $data = [
            'id_pengaduan'  => $this->request->getVar('id_pengaduan'),
            'tgl_pengaduan' => $this->request->getVar('tgl_pengaduan'),
            'nik'           => $this->request->getVar('nik'),
            'isi_laporan'   => $this->request->getVar('isi_laporan'),
            'foto'          => $filename,
        ];

        $pegaduan->simpanPengaduan($data);

        $file->move('uploads/', $filename);

        return redirect()->to('/pengaduan');
    }

    public function hapus($id)
    {
        $pengaduan = new PengaduanModel();
        $pengaduan->deletePengaduan($id);
        return redirect()->to('/pengaduan');
    }
}
