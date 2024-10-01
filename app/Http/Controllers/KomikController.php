<?php

namespace App\Http\Controllers;

use App\Models\Komik;
use Illuminate\Http\Request;

class KomikController extends Controller
{
    function tampil(Request $request)
    {
        $search = $request->input('search');
        $komik = Komik::query();

        if ($search) {
            $komik->where('nama', 'like', '%' . $search . '%');
        }

        $komik = $komik->get();

        return view('komik.tampil', compact('komik'));
    }

    function tambah()
    {
        return view('komik.tambah');
    }

    function submit(Request $request)
    {
        $komik = new Komik();
        $komik->no = $request->no;
        $komik->gambar = $request->gambar;
        $komik->nama = $request->nama;
        $komik->genre = $request->genre;
        $komik->tanggal_update = $request->tanggal_update;
        $komik->tanggal_rilis = $request->tanggal_rilis;
        $komik->autor = $request->autor;
        $komik->save();

        return redirect()->route('komik.tampil');
    }

    function edit($id)
    {
        $komik = Komik::find($id);
        return view('komik.edit', compact('komik'));
    }

    function update(Request $request, $id)
    {
        $komik = Komik::find($id);
        $komik->no = $request->no;
        $komik->gambar = $request->gambar;
        $komik->nama = $request->nama;
        $komik->genre = $request->genre;
        $komik->tanggal_update = $request->tanggal_update;
        $komik->tanggal_rilis = $request->tanggal_rilis;
        $komik->autor = $request->autor;
        $komik->update();

        return redirect()->route('komik.tampil');
    }

    function delete($id)
    {
        $komik = Komik::find($id);
        $komik->delete();
        return redirect()->route('komik.tampil');
    }
}
