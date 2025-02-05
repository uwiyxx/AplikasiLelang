<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function utama(){
        $masyarakat = new Masyarakat();
        return view('data-masyarakat', [
            'data_masyarakat'=>$masyarakat->all()
        ]);
    }
    public function tambah(){
        return view('tambah-masyarakat');
    }
    public function simpan(Request $request){
        $request->validate([
            'id_user'=>'required',
            'nama_lengkap'=>'required',
            'username'=>'required',
            'password'=>'required',
            'telp'=>'required'
        ]);
        $masyarakat = new Masyarakat();
        $masyarakat->create($request->all());
        return redirect('/data-masyarakat');
    }
    public function tampil($id_user){
        $masyarakat = [
            'masyarakat' =>Masyarakat::find($id_user)
        ];
        return view('edit-masyarakat', $masyarakat);
    }
    public function update(Request $request,$id_user){
        $validate =$request->validate([
            'id_user'=>'required',
            'nama_lengkap'=>'required',
            'username'=>'required',
            'password'=>'required',
            'telp'=>'required'
        ]);
        $masyarakat = Masyarakat::find($id_user);
        if ($masyarakat) {
            $masyarakat->update($request->all());
            return redirect('data-masyarakat')->with('success', 'Data Berhasil diupdate');
        } else {
            return redirect()->back()->withErrors('Masyarakat tidak ditemukan');
        }
    }
    public function delete($id_user){
        $masyarakat = new Masyarakat();
        $masyarakat->find($id_user)->delete();
        return redirect('/data-masyarakat');
    }
}
