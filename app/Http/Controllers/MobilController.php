<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    protected $arrayMobil = [];
    function index()
    {
        $dataMobil = session()->get('dataMobil');
        return view('mobil.index', compact('dataMobil'));
    }

    function create()
    {
        return view('mobil.form');
    }

    function store(Request $request)
    {
        $namaMobil = $request->nama_mobil;
        $merkMobil = $request->merk_mobil;
        $cc = $request->cc;

        $dataBaru = [
            'namaMobil' => $namaMobil,
            'merkMobil' => $merkMobil,
            'cc' => $cc
        ];

        array_push($this->arrayMobil, $dataBaru);

        return redirect()->to('/mobil')->with('dataMobil', $this->arrayMobil);
    }
}
