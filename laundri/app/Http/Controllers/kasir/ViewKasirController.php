<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;

class ViewKasirController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.kasir.dashboard');
    }
}
