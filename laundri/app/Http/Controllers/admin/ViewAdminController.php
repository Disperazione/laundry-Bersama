<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class ViewAdminController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }
    public function outlet()
    {
        return view('pages.admin.outlet');
    }
    public function paket()
    {
        return view('pages.admin.paket');
    }
    public function coba1()
    {
        return view('pages.admin.coba');
    }
}
