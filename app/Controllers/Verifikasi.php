<?php

namespace App\Controllers;

use App\Models\VerifikasiModel;

class Verifikasi extends BaseController
{
    public function index()
    {
        $verifikasi  = new VerifikasiModel();
        $data = [
            'title' => 'verifikasi Laporan',
            'verifikasi' => $verifikasi->getVerifikasi()
        ];
        return view('admin/verifikasi', $data);
    }

    public function hapus($id)
    {
        $verifikasi = new VerifikasiModel();
        $verifikasi->deleteVerifikasi($id);
        return redirect()->to('/verifikasi');
    }
}
