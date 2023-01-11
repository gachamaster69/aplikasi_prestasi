<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DataMahasiswa;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function superadmindashboard() {
         $dataUser = DataUser::paginate(6);
         $data = DataMahasiswa::all();
        $total = DataMahasiswa::count();
        return view('superadmindashboard',compact('data','dataUser','total'));
    }
    public function tambahdatauser() {
        return view('tambahuser');
    }

    public function insertuser(Request $request) {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required'
    ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/superadmindashboard');
    }

    public function tampilkandatauser($id) {
        $data = DataUser::find($id);
        // dd($data);
        return view('tampildatauser', compact('data'));
    }

    public function updatedatauser(Request $request, $id) {

        $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        ]);
        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);

        DataUser::find($id)->update($userData);
        return redirect()->route('superadmindashboard')->with('success','Data berhasil di update');
    }


    public function deletedatauser($id) {
        $data = DataUser::find($id);
        $data->delete();
        return redirect()->route('superadmindashboard')->with('success','Data berhasil di hapus');
    }

}
