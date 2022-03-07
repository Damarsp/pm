<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class History extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'History Pengaduan',
        ];
        return view('admin/history', $data);
    }
}
