<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use App\Exports\MahasiswaExport;
use App\Imports\MahasiswaImport;
use App\Models\PrestasiMahasiswa;
use Illuminate\Support\Facades\DB;
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

    public function landing() {
        $data = DataMahasiswa::all();
        $prestasi = DB::table('prestasi')
            ->join('data_mahasiswa', 'prestasi.mahasiswa_id', '=', 'data_mahasiswa.nim')
            ->select('data_mahasiswa.program_studi','data_mahasiswa.nama', 'prestasi.*')
            ->get();

        $results = DB::table('prestasi as P')
            ->join('data_mahasiswa as M', 'P.mahasiswa_id', '=', 'M.nim')
            ->select(DB::raw("LEFT(P.tanggal, 4) as tahun, COUNT(P.id) as jumlah"))
            ->groupBy(DB::raw("LEFT(P.tanggal, 4)"))
            ->get();

        return view('landing',compact('prestasi','data','results'));

    }

    public function datamahasiswa() {
        $data = DataMahasiswa::orderBy('angkatan','desc')->orderBy('nim','asc')->get();
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
