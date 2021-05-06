<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;

class ViewOwnerController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard');
    }
}
