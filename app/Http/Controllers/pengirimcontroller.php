<?php

namespace App\Http\Controllers;

use App\Models\pengirim;
use Illuminate\Http\Request;

class pengirimcontroller extends Controller
{
    //



    //
    public function index(){
        return view('pengirim.index',["title" => "pengirim","data"=>pengirim::paginate(8)]);
        
    }

    public function store(Request $request){
        $validasi=$request->validate([
            "nama"=>"required",
            "noHp"=>"required",
            "alamat"=>"required",
        ]);
        

        pengirim::create($validasi);
        return redirect()->route('pengirim.index');
    }

    public function edit($id){
        $pengirim=pengirim::find($id);
        return view('pengirim.edit')->with('pengirim',$pengirim)->with(["title"=>"tambah cekdata"]);
    }
    public function update(pengirim $pengirim,request $request){
        $validasi=$request->validate([
            "nama"=>"required",
            "nohp"=>"required",
            "alamat"=>"required",
        ]);
        
        
        $pengirim->update($validasi);
        return redirect()->route('pengirim.index')->with(["title"=>"pengirim edit"]);
    }

    public function destroy($id){
        pengirim::where('id',$id)->Delete();
        return redirect()->route(('pengirim.index'))->with('success', 'pengirim berhasil dihapus');;
    }
}