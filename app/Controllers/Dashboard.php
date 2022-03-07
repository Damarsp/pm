<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if (in_groups('admin')) {
            $data = ['title' => 'Dashboard Admin'];
            return view('admin/index', $data);
        }

        if (in_groups('staff')) {
            $data = ['title' => 'Dashboard Petugas'];
            return view('staff/index', $data);
        }

        if (in_groups('user')) {
            $data = ['title' => 'Dashboard User'];
            return view('user/index', $data);
        }
    }
}
