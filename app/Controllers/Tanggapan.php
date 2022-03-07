<?php

namespace App\Controllers;

use App\Models\TanggapanModel;
use App\Models\PengaduanModel;

class Tanggapan extends BaseController
{
    public function index()
    {
        $tanggapan  = new TanggapanModel();
        $data = [
            'title' => 'Tanggapan ',
            'tanggapan' => $tanggapan->getTanggapanStatus(),
        ];
        return view('admin/tanggapan', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Tanggapan';
        echo view('crud-tanggapan/tambah', $data);
    }

    public function simpan()
    {
        $tanggapan = new TanggapanModel();
        $data = [
            'id_tanggapan'  => $this->request->getVar('id_tanggapan'),
            'id_pengaduan'  => $this->request->getVar('id_pengaduan'),
            'tgl_tanggapan' => $this->request->getVar('tgl_tanggapan'),
            'tanggapan'     => $this->request->getVar('tanggapan'),
            'id_petugas'    => $this->request->getVar('id_petugas'),
        ];
        $tanggapan->simpanTanggapan($data);
        return redirect()->to('/tanggapan');
    }

    public function kirim($id = null)
    {
        $pengaduan = new PengaduanModel();
        $pengaduan->where('id_pengaduan', $id)->set([
            'status' => 'selesai',
        ])->update();

        return redirect()->to('/tanggapan');
    }

    public function history()
    {
        if (in_groups('admin')) {
            $tanggapan  = new TanggapanModel();
            $data = [
                'title' => 'Tanggapan ',
                'tanggapan' => $tanggapan->getAdminHistory(),
            ];
            return view('admin/history', $data);
        }

        if (in_groups('staff')) {
            $tanggapan  = new TanggapanModel();
            $data = [
                'title' => 'Tanggapan ',
                'tanggapan' => $tanggapan->getAdminHistory(),
            ];
            return view('admin/history', $data);
        }

        if (in_groups('user')) {
            $tanggapan  = new TanggapanModel();
            $data = [
                'title' => 'Tanggapan ',
                'tanggapan' => $tanggapan->getAdminHistory(),
            ];
            return view('admin/history', $data);
        }
    }

    public function print()
    {
        $tanggapan = new TanggapanModel();
        $data['tanggapan'] = $tanggapan->getTanggapan();
        echo view('admin/print', $data);
    }
}
