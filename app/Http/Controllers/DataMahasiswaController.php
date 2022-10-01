<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    public function datamahasiswa() {
        $data = DataMahasiswa::all();
        
        return view('datamahasiswa',compact('data'));
    }

    public function tambahdatamahasiswa() {
        return view('tambahdata');
    }

    public function insertdata(Request $request) {
        
        DataMahasiswa::create($request->all());
        return redirect()->route('datamahasiswa')->with('success','Data berhasil di tambahkan');
    }

    public function tampilkandata($id) {
        $data = DataMahasiswa::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id) {
        $data = DataMahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('datamahasiswa')->with('success','Data berhasil di update');
    }

    public function deletedata($id) {
        $data = DataMahasiswa::find($id);
        $data->delete();
        return redirect()->route('datamahasiswa')->with('success','Data berhasil di hapus');
    }
}
