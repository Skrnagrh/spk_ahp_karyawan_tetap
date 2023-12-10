<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Perhitungan;
use Illuminate\Http\Request;
use App\Http\helpers\Formula;
use App\Models\KriteriaValid;
use App\Models\SubkriteriaValid;
use App\Http\Controllers\Controller;
use App\Models\PerhitunganSubkriteria;
use App\Models\NilaiPrioritasSubkriteria;

class PerhitunganAlternatifController extends Controller
{
    public function alternatif()
    {
        $kriterias = Kriteria::get();
        $alternatifs = Alternatif::get();
        $nilai_prioritas_subkriterias = NilaiPrioritasSubkriteria::get();
        $perhitungans_all = Perhitungan::get();
        $is_valid = KriteriaValid::first();
        $is_subkriteria_valid = SubkriteriaValid::where('is_valid', false)->first();

        // Mengurutkan data perhitungan secara menurun berdasarkan kolom "total"
        $perhitungans_all = $perhitungans_all->sortByDesc('total')->values();

        return view('dashboard.perhitungan_alternatif.alternatif', [
            'kriterias' => $kriterias,
            'alternatifs' => $alternatifs,
            'nilai_prioritas_subkriterias' => $nilai_prioritas_subkriterias,
            'perhitungans_all' => $perhitungans_all,
            'is_valid' => $is_valid,
            'is_subkriteria_valid' => $is_subkriteria_valid ? false : true
        ]);
    }

    public function hasil(Request $request)
    {
        $id = $request->query('id');
        if ($id == null) {
            return redirect('perhitungan_subkriteria');
        }
        $is_valid = SubkriteriaValid::where('id_kriteria', $id)->first();
        $kriteria = Kriteria::where('id', $id)->firstOrFail();
        $nilai_index_random = (Formula::$nilai_index_random[count($kriteria->subkriterias)]);
        $perhitungans_all = PerhitunganSubkriteria::where('id_kriteria', $id)->get();
        return view('dashboard.perhitungan_alternatif.hasil',  [
            'kriteria' => $kriteria,
            'is_valid' => $is_valid,
            'perhitungans_all' => $perhitungans_all,
            'nilai_index_random' => $nilai_index_random
        ]);
    }

    public function prangkingan(Request $request)
    {
        $kriterias = Kriteria::get();
        $alternatifs = Alternatif::get();
        $nilai_prioritas_subkriterias = NilaiPrioritasSubkriteria::get();
        $perhitungans_all = Perhitungan::get();
        $is_valid = KriteriaValid::first();
        $is_subkriteria_valid = SubkriteriaValid::where('is_valid', false)->first();

        // Mengurutkan data perhitungan secara menurun berdasarkan kolom "total"
        $perhitungans_all = $perhitungans_all->sortByDesc('total')->values();

        return view('dashboard.perhitungan_alternatif.prangkingan', [
            'kriterias' => $kriterias,
            'alternatifs' => $alternatifs,
            'nilai_prioritas_subkriterias' => $nilai_prioritas_subkriterias,
            'perhitungans_all' => $perhitungans_all,
            'is_valid' => $is_valid,
            'is_subkriteria_valid' => $is_subkriteria_valid ? false : true
        ]);
    }
}
