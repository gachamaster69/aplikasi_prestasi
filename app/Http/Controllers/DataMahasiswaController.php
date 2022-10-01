<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use App\Exports\MahasiswaExport;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class DataMahasiswaController extends Controller
{
    public function datamahasiswa() {
        $data = DataMahasiswa::paginate(5);
        
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

    public function exportexcel() {
        return Excel::download(new MahasiswaExport, 'datamahasiswa.xlsx');
    }

    public function importexcel(Request $request) {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('MahasiswaData', $namafile);

        Excel::import(new MahasiswaImport, \public_path('/MahasiswaData/'.$namafile));
        return \redirect()->back();
    }
}
