<?php

namespace App\Http\Controllers;

use App\Models\PrestasiMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PrestasiMahasiswaController extends Controller
{
    public function dataprestasi($id) {
        $data = PrestasiMahasiswa::where('mahasiswa_id', $id)->get();
        $id = request()->id;
        return view('dataprestasi',compact('data','id'));
    }

    public function prestasiakademik(Request $request) {
        $data = PrestasiMahasiswa::where('jenis_prestasi', 'Akademik')->get();
        return view('prestasiakademik',compact('data'));
    }

    public function prestasinonakademik() {
        $data = PrestasiMahasiswa::where('jenis_prestasi', 'Non Akademik')->get();
        return view('prestasinonakademik',compact('data'));
    }

    public function tambahprestasi($id) {
        $id = request()->id;
        return view('tambahprestasi',compact('id'));
    }

    public function tampilkanprestasi($id) {
        $data = PrestasiMahasiswa::find($id);
        // dd($data);
        return view('tampilprestasi', compact('data'));
    }

    public function updateprestasi(Request $request, $id) {
        $data = PrestasiMahasiswa::find($id);
        $data->update($request->all());
        if($request->hasFile('berkas')){
            $request->file('berkas')->move('berkasprestasi/', $request->file('berkas')->getClientOriginalName());
            $data->berkas = $request->file('berkas')->getClientOriginalName();
            $data->save();
        }
        return redirect('dataprestasi/'.$data->mahasiswa_id)->with('success','Prestasi berhasil di update');
    }

    public function insertprestasi(Request $request) {
        $this->validate($request, [
        'prestasi' => 'required',
        'jenis_prestasi' => 'required',
        'skala' => 'required',
        'penyelenggara' => 'required',
        'berkas' => 'required',
        'tanggal' => 'required',
    ]);
   $prestasiMhsw = PrestasiMahasiswa::create($request->all());
        if($request->hasFile('berkas')){
            $request->file('berkas')->move('berkasprestasi/', $request->file('berkas')->getClientOriginalName());
            $prestasiMhsw->berkas = $request->file('berkas')->getClientOriginalName();
            $prestasiMhsw->save();
        }
        return redirect('dataprestasi/'.$request->input('mahasiswa_id'))->with('success','Prestasi berhasil di tambahkan');
    }

    public function deleteprestasi($id) {
        $data = PrestasiMahasiswa::find($id);
        $data->delete();
        return redirect('dataprestasi/'.$data->mahasiswa_id)->with('success','Prestasi berhasil di hapus');
    }
    public function deleteprestasiakademik($id) {
        $data = PrestasiMahasiswa::find($id);
        $data->delete();
        return redirect()->route('prestasiakademik')->with('success','Prestasi berhasil di hapus');
    }
    public function deleteprestasinonakademik($id) {
        $data = PrestasiMahasiswa::find($id);
        $data->delete();
        return redirect()->route('prestasinonakademik')->with('success','Prestasi berhasil di hapus');
    }
}
