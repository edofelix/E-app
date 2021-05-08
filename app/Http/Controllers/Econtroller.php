<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Econtroller extends Controller
{

    public function home(){
        // Mengambil data dari tabel 'barang' di database
        $barang = DB::table('barang')->paginate(8);

        return view('/home',['barang'=>$barang]);
    }

    public function ehome(){
        // Mengambil data dari tabel 'barang' di database
        $barang = DB::table('barang')->paginate(4);
        
        return view('ehome',['barang'=>$barang]);
    }

    public function tambah(Request $req){
        DB::table('barang')->insert(
            [
                'nama'=>$req->nama2,
                'harga'=>$req->harga2,
                'stok'=>$req->stok2
            ]
        );
        return redirect()->back();
    }

    public function update(Request $req){
        DB::table('barang')->where('id', $req->id)->update(
            [
                'nama'=>$req->nama,
                'harga'=>$req->harga,
                'stok'=>$req->stok
            ]
        );
        //return $this->ehome();
        //yang bawah ini call route(berdasarkan nama routenya) langsung dari sini(controller)
        //return redirect()->route('ehome');
        return redirect()->back();
    }

    public function hapus($id){
        DB::table('barang')->where('id', $id)->delete();
    
        return redirect()->back();
    }

    public function egaleri(){
        return view('egaleri');
    }
}
