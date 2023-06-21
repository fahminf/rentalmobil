<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    function index(){
        $merkData = TipeMobil::get();
        return view('pages.tipe_mobil.index', ['merkData'=>$merkData]);
    }

    function create(){
        return view('pages.tipe_mobil.create');
    }

    function store(Request $request) {
        $merkData = new TipeMobil;
        $merkData->tipe = $request->tipe;
        $merkData->save();

        return redirect('/tipe_mobil');
    }

    function edit($id){
        $merkData = TipeMobil::find($id);
       return view('pages.tipe_mobil.edit', ['merkData'=> $merkData]);
    }

    function update($id, Request $request){
        $merkData = TipeMobil::find($id);
        $merkData->tipe = $request->tipe;
        $merkData->save();

        return redirect()->to('/tipe_mobil')->with('success', 'data berhasil diupdate');

    }

    function delete($id, Request $request){
        $merkData = TipeMobil::find($id);
        $merkData->delete();

        return redirect()->to('/tipe_mobil')->with('success', 'data berhasil dihapus');

    }
}