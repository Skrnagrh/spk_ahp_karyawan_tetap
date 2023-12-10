<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kriteria;
use App\Models\Perhitungan;
use App\Models\Subkriteria;
use Illuminate\Http\Request;
use App\Models\KriteriaValid;
use Illuminate\Support\Facades\DB;
use App\Models\MatrixNilaiKriteria;
use App\Http\Controllers\Controller;
use App\Models\NilaiPrioritasKriteria;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::all();

        return view('dashboard.kriteria.index', ['kriterias' => $kriterias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $kriteria)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kriteriaModel = new Kriteria();
        $kriteriaModel->nama_kriteria = $request->nama_kriteria;

        DB::table('perhitungans')->delete();
        DB::table('matrix_nilai_kriterias')->delete();
        DB::table('nilai_prioritas_kriterias')->delete();
        DB::table('kriteria_valids')->delete();

        $kriteriaModel->save();
        return redirect('/kriteria')->with('success', 'Berhasil menambahkan kriteria');
    }

    /**
     * Display the specified resource.
     */


     public function show($id)
     {
         $kriteria = Kriteria::findOrFail($id);
         $subkriterias = Subkriteria::where('id_kriteria', $id)->get();

         return view('dashboard.kriteria.show', compact('subkriterias', 'kriteria'));
     }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kriteria $kriteria)
    {
        $id = $request->input('id_kriteria');
        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->nama_kriteria = $request->input('nama_kriteria');
        $kriteria->save();
        return redirect('/kriteria')->with('success', 'Berhasil edit kriteria');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id_kriteria');

        // Hapus semua subkriteria terkait dengan kriteria ini
        Subkriteria::where('id_kriteria', $id)->delete();

        // Hapus semua perhitungan kriteria yang menggunakan kriteria ini
        DB::table('perhitungans')->delete();
        DB::table('matrix_nilai_kriterias')->delete();
        DB::table('nilai_prioritas_kriterias')->delete();
        // DB::table('kriteria_valids')->delete();

        // Perhitungan::where('id_kriteria', $id)->delete();

        // Hapus kriteria itu sendiri
        Kriteria::where('id', $id)->delete();

        // Set kriteria_valids menjadi false
        // $kriteriaValid = KriteriaValid::first();
        // $kriteriaValid->is_valid = false;
        // $kriteriaValid->save();

        // Hapus semua data terkait yang di-seed
        MatrixNilaiKriteria::where('id_kriteria', $id)->delete();
        NilaiPrioritasKriteria::where('id_kriteria', $id)->delete();

        return redirect('kriteria')->with('success', 'Berhasil menghapus kriteria beserta subkriteria, perhitungannya, dan mengubah kriteria_valids menjadi false serta data terkait yang di-seed.');
    }
}
