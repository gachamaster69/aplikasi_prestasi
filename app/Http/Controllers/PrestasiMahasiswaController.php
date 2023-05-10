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
        $data = PrestasiMahasiswa::where('jenis_prestasi', 'Akademik')->orderBy('tanggal','desc')->get();
        return view('prestasiakademik',compact('data'));
    }

    public function prestasinonakademik() {
        $data = PrestasiMahasiswa::where('jenis_prestasi', 'Non Akademik')->orderBy('tanggal','desc')->get();
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
        if($request->hasFile('berkas2')){
            $request->file('berkas2')->move('berkasprestasi2/', $request->file('berkas2')->getClientOriginalName());
            $data->berkas2 = $request->file('berkas2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('berkas3')){
            $request->file('berkas3')->move('berkasprestasi3/', $request->file('berkas3')->getClientOriginalName());
            $data->berkas3 = $request->file('berkas3')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('berkas_kegiatan')){
            $request->file('berkas_kegiatan')->move('berkaskegiatan/', $request->file('berkas_kegiatan')->getClientOriginalName());
            $data->berkas_kegiatan = $request->file('berkas_kegiatan')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('berkas_kegiatan2')){
            $request->file('berkas_kegiatan2')->move('berkaskegiatan2/', $request->file('berkas_kegiatan2')->getClientOriginalName());
            $data->berkas_kegiatan2 = $request->file('berkas_kegiatan2')->getClientOriginalName();
            $data->save();
        }
        if($request->hasFile('berkas_kegiatan3')){
            $request->file('berkas_kegiatan3')->move('berkaskegiatan3/', $request->file('berkas_kegiatan3')->getClientOriginalName());
            $data->berkas_kegiatan3 = $request->file('berkas_kegiatan3')->getClientOriginalName();
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
        'berkas' => 'required|mimes:pdf',
        'berkas2' => 'mimes:pdf',
        'berkas3' => 'mimes:pdf',
        'berkas_kegiatan' => 'required|mimes:jpg,png,jpeg|size:1099',
        'berkas_kegiatan2' => 'mimes:jpg,png,jpeg',
        'berkas_kegiatan3' => 'mimes:jpg,png,jpeg',
        'tanggal' => 'required',
    ]);
   $prestasiMhsw = PrestasiMahasiswa::create($request->all());
        if($request->hasFile('berkas')){
            $request->file('berkas')->move('berkasprestasi/', $request->file('berkas')->getClientOriginalName());
            $prestasiMhsw->berkas = $request->file('berkas')->getClientOriginalName();
            $prestasiMhsw->save();
        }
        if($request->hasFile('berkas2')){
            $request->file('berkas2')->move('berkasprestasi2/', $request->file('berkas2')->getClientOriginalName());
            $prestasiMhsw->berkas2 = $request->file('berkas2')->getClientOriginalName();
            $prestasiMhsw->save();
        }
        if($request->hasFile('berkas3')){
            $request->file('berkas3')->move('berkasprestasi3/', $request->file('berkas3')->getClientOriginalName());
            $prestasiMhsw->berkas3 = $request->file('berkas3')->getClientOriginalName();
            $prestasiMhsw->save();
        }
        if($request->hasFile('berkas_kegiatan')){
            $request->file('berkas_kegiatan')->move('berkaskegiatan/', $request->file('berkas_kegiatan')->getClientOriginalName());
            $prestasiMhsw->berkas_kegiatan = $request->file('berkas_kegiatan')->getClientOriginalName();
            $prestasiMhsw->save();
        }
        if($request->hasFile('berkas_kegiatan2')){
            $request->file('berkas_kegiatan2')->move('berkaskegiatan2/', $request->file('berkas_kegiatan2')->getClientOriginalName());
            $prestasiMhsw->berkas_kegiatan2 = $request->file('berkas_kegiatan2')->getClientOriginalName();
            $prestasiMhsw->save();
        }
        if($request->hasFile('berkas_kegiatan3')){
            $request->file('berkas_kegiatan3')->move('berkaskegiatan3/', $request->file('berkas_kegiatan3')->getClientOriginalName());
            $prestasiMhsw->berkas_kegiatan3 = $request->file('berkas_kegiatan3')->getClientOriginalName();
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
