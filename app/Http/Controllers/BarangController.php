<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function utama(){
        $barang = new Barang();
        return view('barang', [
            'data_barang'=>$barang->all()
        ]);
    }
    public function tambah(){
        return view('tambah-barang');
    }
    public function simpan(Request $request){
        $request->validate([
            'id_barang'=>'required',
            'nama_barang'=>'required',
            'tgl'=>'required',
            'harga_awal'=>'required',
            'deskripsi_barang'=>'required'
        ]);
        $barang = new Barang();
        $barang->create($request->all());
        return redirect('/barang');
    }
    public function tampil($id_barang){
        $barang = [
            'barang' =>Barang::find($id_barang)
        ];
        return view('edit-barang', $barang);
    }
    public function update(Request $request,$id_barang){
        $validate =$request->validate([
            'id_barang'=>'required',
            'nama_barang'=>'required',
            'tgl'=>'required',
            'harga_awal'=>'required',
            'deskripsi_barang'=>'required'
        ]);
        $barang = Barang::find($id_barang);
        if ($barang) {
            $barang->update($request->all());
            return redirect('barang')->with('success', 'Data Berhasil diupdate');
        } else {
            return redirect()->back()->withErrors('Barang tidak ditemukan');
        }
    }
    public function delete($id_barang){
        $barang = new Barang();
        $barang->find($id_barang)->delete();
        return redirect('/barang');
    }
}
