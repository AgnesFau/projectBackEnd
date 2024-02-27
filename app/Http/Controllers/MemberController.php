<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class MemberController extends Controller
{
    //

    public function AddMember() {
        return view('addMember');
    }

    public function memberKaryawan(Request $req){
        member::create([
            'namaKaryawan' => $req->nama,
            'umurKaryawan' => $req->usia,
            'alamatKaryawan' => $req->alamat,
            'nomorTelepon' => $req->telepon,
        ]);

        return redirect('/');
    }

    public function viewAllBook(){
        $book = member::all();

        return view('welcome')->with('semuaMember', $book);
    }

    public function UpdateMember($id){
        $book = member::findOrFail($id);

        return view('updateMember')->with('semuaMember', $book);
    }

    public function saveUpdate($id, Request $request){
        $book = member::findOrFail($id)->update([
            'namaKaryawan' => $request->nama,
            'umurKaryawan' => $request->usia,
            'alamatKaryawan' => $request->alamat,
            'nomorTelepon' => $request->telepon,
        ]);
        return redirect('/');
    }

    public function deleteMember($id){
        member::destroy($id);

        return redirect('/');
    }
}
