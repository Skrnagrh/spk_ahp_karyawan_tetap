<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatifs = Alternatif::all(); // Retrieve paginated data with 10 items per page

        return view('dashboard.alternatif.index', ['alternatifs' => $alternatifs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nik' => 'required|unique:alternatifs',
            'nama' => 'required',
        ]);

        $alternatif = new Alternatif();
        $alternatif->nama = $request->nama;
        $alternatif->nik = $request->nik;

        $alternatif->save();
        return redirect('/alternatif')->with('success', 'Berhasil menambahkan alternatif');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alternatif $alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alternatif $alternatif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Alternatif $alternatif)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
        ]);

        // Update data
        $alternatif->nama = $request->input('nama');
        $alternatif->nik = $request->input('nik');

        if ($alternatif->save()) {
            return redirect('/alternatif')->with('success', 'Berhasil edit alternatif');
        } else {
            return redirect('alternatif')->with('error', 'Gagal edit alternatif');
        }
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Alternatif $alternatif)
    {
        // buat deleted data
        Alternatif::destroy($alternatif->id);
        // alert sukses delete
        return redirect('/alternatif')->with('success', 'Data Alternatif Berhasil di Hapus!');
    }
}
