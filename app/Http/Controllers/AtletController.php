<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AtletController extends Controller
{
    public function index()
    {
        $atlets = Atlet::get();
        return view('atlet.index', ['atlets' => $atlets]);
    }

    public function create()
    {
        return view('atlet.create');
    }

    public function store(Request $request)
    {
        $validateatlet = $request->validate([
            'nama_atlet' => 'required|min:3',
            'negara' => 'required|min:4'
        ]);
        $sektor = $request->validate([
            'kode_sektor' => 'required',
            'nama_sektor' => 'required|min:3',
        ]);

        $atlet = Atlet::create($validateatlet);
        $atlet->sektor()->create($sektor);
        return redirect()->route('atlet.index')->with('message', "Data atlet {$validateatlet['nama_atlet']} berhasil ditambahkan");
    }

    public function destroy(Atlet $atlet)
    {
        $atlet->sektor()->delete($atlet->id);
        $atlet->delete($atlet->id);
        return redirect()->route('atlet.index')->with('message', "Data atlet $atlet->nama_atlet berhasil dihapus");
    }

    public function edit(Atlet $atlet)
    {
        return view('atlet.edit', ['atlet' => $atlet]);
    }

    public function update(Request $request, Atlet $atlet)
    {
        $validateatlet = $request->validate([
            'nama_atlet' => 'required|min:3',
            'negara' => 'required|min:4'
        ]);

        $sektor = $request->validate([
            'kode_sektor' => 'required',
            'nama_sektor' => 'required|min:3',
        ]);

        $atlet1 = Atlet::find($atlet->id);
        $atlet1->update($validateatlet);
        $atlet1->sektor()->update($sektor);

        return redirect()->route('atlet.index')->with('message', "Data atlet $atlet->nama_atlet berhasil diubah");
    }
}
