<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    public function index()
    {
        $member = Member::all();
        return view('pages.admin.member.index', compact('member'));
    }
    public function createmember()
    {
        return view('pages.admin.member.createmember');
    }

    public function store(Request $request)
    {
        Member::create($request->all());
        return redirect()->route('member.index');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('pages.admin.member.editmember', compact('member'));
    }
    public function update(Request $request,$id)
    {
        Member::find($id)->update($request->all());
        return redirect()->route('member.index');
    }
    public function hapus($id)
    {
        Member::destroy($id);
        return redirect()->route('member.index');
    }
}
