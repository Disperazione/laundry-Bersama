<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function postlogin(AuthRequest $request)
    {
        $validate = $request->validated();
        $remember = $request->remember == 'on' ? true : false; // rememberme
        if (Auth::attempt($request->only('username', 'password'), $remember)) {
            if (Auth()->user()->role == 'kasir') {
                $request->session()->regenerate();
                return redirect('/kasir/dashboard');
            } else if (Auth()->user()->role == 'admin') {
                $request->session()->regenerate();
                return redirect('/admin/dashboard');
            } else if (Auth()->user()->role == 'owner') {
                $request->session()->regenerate();
                return redirect('/owner/dashboard');
            }
        } else {
            return redirect('/')->withInput()->withErrors(['password' => 'Password anda salah!', 'username' => 'Username anda salah!']);
        }
    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
    public function waktu_log(request $request)
    {
        $waktu = 'Logged in ' . session()->get('last_login_at')->locale('en_US')->diffForHumans();
        return response()->json(compact('waktu'));
    }
}
