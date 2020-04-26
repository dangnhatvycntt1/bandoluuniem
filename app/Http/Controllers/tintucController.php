<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;

class tintucController extends Controller
{
    public function home () {
        $danhsachTinTuc = TinTuc::all();
        return view('index', ['danhsachTinTuc' => $danhsachTinTuc]);
    }
    //
    public function chiTiet ($id) {
        $tintuc = TinTuc::where('id', $id)->first();
        return view('chi-tiet', ['tintuc' => $tintuc]);
    }

    public function themTinTuc (Request $request) {
        $tintuc = new TinTuc;
        $tintuc->ten = $request->ten;
        $tintuc->noi_dung = $request->noi_dung;
        $tintuc->save();
        return redirect('/');
    }
    public function laythongtinsua($id) {
        $tintuc = TinTuc::where('id', $id)->first();
        return view('sua', ['tintuc' => $tintuc]);
    }
    public function suatintuc(Request $request, $id) {
        $tintuc = TinTuc::where('id', $id)->first();
        $tintuc->ten = $request->ten;
        $tintuc->noi_dung = $request->noi_dung;
        $tintuc->save();
        return redirect('/');
    }
    public function xoatintuc($id) {
        $tintuc = TinTuc::where('id',$id)->first()->delete();
        return view('ketqua');
    }
}
