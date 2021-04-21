<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Econtroller extends Controller
{

    public function home(){
        // Mengambil data dari tabel 'barang' di database
        $barang = DB::table('barang')->get();

        return view('/home',['barang'=>$barang]);
    }

    public function ehome(){
        // Mengambil data dari tabel 'barang' di database
        $barang = DB::table('barang')->get();
        
        return view('ehome',['barang'=>$barang]);
    }

    public function tambah(){
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
        return redirect()->route('ehome');
    }

    public function egaleri(){
        return view('egaleri');
    }
}
