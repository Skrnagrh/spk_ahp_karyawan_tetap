<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Perhitungan;
use App\Models\SubKriteria;
use Illuminate\Http\Request;
use App\Models\KriteriaValid;
use App\Models\SubkriteriaValid;
use App\Http\Controllers\Controller;
use App\Models\NilaiPrioritasSubkriteria;

class DashboardController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::get();
        $alternatifs = Alternatif::get();
        $nilai_prioritas_subkriterias = NilaiPrioritasSubkriteria::get();
        $perhitungans_all = Perhitungan::get();
        $is_valid = KriteriaValid::first();
        $is_subkriteria_valid = SubkriteriaValid::where('is_valid', false)->first();

        // Mengurutkan data perhitungan secara menurun berdasarkan kolom "total"
        $perhitungans_all = $perhitungans_all->sortByDesc('total')->values();

        return view('dashboard.index', [
            "title" => 'Dashboard',
            "active" => "dashboard",
            "alternatif" => Alternatif::get()->count(),
            "kriteria" => Kriteria::get()->count(),
            "subkriteria" => SubKriteria::get()->count(),


            'kriterias' => $kriterias,
            'alternatifs' => $alternatifs,
            'nilai_prioritas_subkriterias' => $nilai_prioritas_subkriterias,
            'perhitungans_all' => $perhitungans_all,
            'is_valid' => $is_valid,
            'is_subkriteria_valid' => $is_subkriteria_valid ? false : true
        ]);
    }
}
