<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DataMahasiswa;

class DataUserController extends Controller
{
    public function superadmindashboard() {
         $dataUser = DataUser::paginate(6);
         $data = DataMahasiswa::all();
        $avgIpk = DataMahasiswa::avg('ipk');
        $total = DataMahasiswa::count();
        $avgTunggakan = DataMahasiswa::avg('tunggakan');
        $avgPendapatan = DataMahasiswa::avg('pendapatan');
        return view('superadmindashboard',compact('data','dataUser','avgIpk','avgTunggakan','avgPendapatan','total'));
    }
    public function tambahdatauser() {
        return view('tambahuser');
    }

    public function insertuser(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/superadmindashboard');
    }

    public function tampilkandatauser($id) {
        $data = DataUser::find($id);
        // dd($data);
        return view('tampildatauser', compact('data'));
    }

    public function updatedatauser(Request $request, $id) {
        $data = DataUser::find($id);
        $data->update($request->all());
        return redirect()->route('superadmindashboard')->with('success','Data berhasil di update');
    }

    public function deletedatauser($id) {
        $data = DataUser::find($id);
        $data->delete();
        return redirect()->route('superadmindashboard')->with('success','Data berhasil di hapus');
    }

}
