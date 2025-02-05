<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function utama(){
        $petugas = new Petugas();
        return view('data-petugas', [
            'data_petugas'=>$petugas->all()
        ]);
    }
    public function tambah(){
        return view('tambah-petugas');
    }
    public function simpan(Request $request){
        $request->validate([
            'id_petugas'=>'required',
            'nama_petugas'=>'required',
            'username'=>'required',
            'password'=>'required',
            'id_level'=>'required'
        ]);
        $petugas = new Petugas();
        $petugas->create($request->all());
        return redirect('/data-petugas');
    }
    public function tampil($id_petugas){
        $petugas = [
            'petugas' =>Petugas::find($id_petugas)
        ];
        return view('edit-petugas', $petugas);
    }
    public function update(Request $request,$id_petugas){
        $validate =$request->validate([
            'id_petugas'=>'required',
            'nama_petugas'=>'required',
            'username'=>'required',
            'password'=>'required',
            'id_level'=>'required'
        ]);
        $petugas = Petugas::find($id_petugas);
        if ($petugas) {
            $petugas->update($request->all());
            return redirect('data-petugas')->with('success', 'Data Berhasil diupdate');
        } else {
            return redirect()->back()->withErrors('Petugas tidak ditemukan');
        }
    }
    public function delete($id_petugas){
        $petugas = new Petugas();
        $petugas->find($id_petugas)->delete();
        return redirect('/data-petugas');
    }
}

