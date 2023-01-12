<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use App\Exports\MahasiswaExport;
use App\Imports\MahasiswaImport;
use App\Models\PrestasiMahasiswa;
use Maatwebsite\Excel\Facades\Excel;

class DataMahasiswaController extends Controller
{
    public function welcome() {
        $data = DataMahasiswa::all();
        $total = DataMahasiswa::count();
        $jumlahprestasi = PrestasiMahasiswa::count();
        $jumlahskalanasional = PrestasiMahasiswa::where('skala', 'Nasional')->count();
        $jumlahskalainter = PrestasiMahasiswa::where('skala', 'Internasional')->count();
        $jumlahjenisakademik = PrestasiMahasiswa::where('jenis_prestasi', 'Akademik')->count();
        $jumlahjenisnon = PrestasiMahasiswa::where('jenis_prestasi', 'Non Akademik')->count();
        return view('welcome',compact('total','jumlahprestasi','jumlahskalanasional','jumlahskalainter','jumlahjenisakademik','jumlahjenisnon'));

    }

    public function datamahasiswa() {
        $data = DataMahasiswa::all();
        return view('datamahasiswa',compact('data'));
    }

    public function tambahdatamahasiswa() {
        return view('tambahdata');
    }

    public function insertdata(Request $request) {
        $this->validate($request, [
        'nim' => 'required',
        'nama' => 'required',
        'angkatan' => 'required',
        'program_studi' => 'required',
    ]);

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
