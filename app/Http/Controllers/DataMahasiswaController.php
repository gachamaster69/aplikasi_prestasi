<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use App\Exports\MahasiswaExport;
use App\Exports\MahasiswaExportInternasional;
use App\Imports\MahasiswaImport;
use App\Exports\MahasiswaExportIpk;
use App\Exports\MahasiswaExportNasional;
use App\Exports\MahasiswaExportPendapatan;
use App\Exports\MahasiswaExportTunggakan;
use Maatwebsite\Excel\Facades\Excel;

class DataMahasiswaController extends Controller
{   
    public function welcome() {
        $data = DataMahasiswa::all();
        $avgIpk = DataMahasiswa::avg('ipk');
        $total = DataMahasiswa::count();
        $avgTunggakan = DataMahasiswa::avg('tunggakan');
        $avgPendapatan = DataMahasiswa::avg('pendapatan');
      
        return view('welcome',compact('avgIpk','total','avgTunggakan','avgPendapatan'));
        
    }

    public function datamahasiswa() {
        $data = DataMahasiswa::sortable()->orderBy('nim','asc')->paginate(6);
        
        return view('datamahasiswa',compact('data'));
    }

    public function datamahasiswaipk() {
        $data = DataMahasiswa::sortable()->orderBy('ipk','desc')->paginate(10);
        
        return view('datamahasiswaipk',compact('data'));
    }

    public function datamahasiswapendapatan() {
        $data = DataMahasiswa::sortable()->orderBy('pendapatan','asc')->paginate(10);
        
        return view('datamahasiswapendapatan',compact('data'));
    }

    public function datamahasiswanasional() {
        $data = DataMahasiswa::sortable()->orderBy('jumlah_prestasi_nasional','desc')->paginate(10);
        
        return view('datamahasiswanasional',compact('data'));
    }

    public function datamahasiswainternasional() {
        $data = DataMahasiswa::sortable()->orderBy('jumlah_prestasi_internasional','desc')->paginate(10);
        
        return view('datamahasiswainternasional',compact('data'));
    }

    public function datamahasiswatunggakan() {
        $data = DataMahasiswa::sortable()->orderBy('tunggakan','desc')->paginate(10);
        
        return view('datamahasiswatunggakan',compact('data'));
    }



    public function tambahdatamahasiswa() {
        return view('tambahdata');
    }

    public function insertdata(Request $request) {
        $this->validate($request, [
        'nim' => 'required',
        'nama' => 'required',
        'ipk' => 'required',
        'pendapatan' => 'required',
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
    public function exportexcelipk() {
        return Excel::download(new MahasiswaExportIpk, 'datamahasiswa.xlsx');
    }
    public function exportexcelpendapatan() {
        return Excel::download(new MahasiswaExportPendapatan, 'datamahasiswa.xlsx');
    }

    public function exportexcelnasional() {
        return Excel::download(new MahasiswaExportNasional, 'datamahasiswa.xlsx');
    }

    public function exportexcelinternasional() {
        return Excel::download(new MahasiswaExportInternasional, 'datamahasiswa.xlsx');
    }

    public function exportexceltunggakan() {
        return Excel::download(new MahasiswaExportTunggakan, 'datamahasiswa.xlsx');
    }

    public function importexcel(Request $request) {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('MahasiswaData', $namafile);

        Excel::import(new MahasiswaImport, \public_path('/MahasiswaData/'.$namafile));
        return \redirect()->back();
    }
    

}
