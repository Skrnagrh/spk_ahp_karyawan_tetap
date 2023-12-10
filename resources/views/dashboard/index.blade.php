@extends('dashboard.partials.main')

@section('content')
@section('title')Dashboard @endsection

<div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Alternatif</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="bi bi-person-lines-fill align-middle"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $alternatif }}</h1>
                            <div class="mb-0">
                                <span class="text-muted">Total Karyawan</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Kriteria</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="bi bi-bar-chart-steps align-middle"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $kriteria }}</h1>
                            <div class="mb-0">
                                <span class="text-muted">Total Kriteria</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Subkriteria</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="bi bi-bar-chart-steps align-middle"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $subkriteria }}</h1>
                            <div class="mb-0">
                                <span class="text-muted">Total Subkriteria</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Prangkingan</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="bi bi-award-fill align-middle"></i>
                                    </div>
                                </div>
                            </div>
                            @if (count($kriterias) && count($alternatifs))
                            <?php
                                $rank = array();
                                $message = null; // Variabel untuk menyimpan pesan
                                foreach ($alternatifs as $outerIndex => $alternatif) {
                                    $total = 0;
                                    foreach ($kriterias as $innerIndex => $kriteria3) {
                                        $alternatifDetail = $kriteria3->alternatifdetails()->where('id_alternatif', $alternatif->id)->first();
                                        if ($alternatifDetail) {
                                            $id_subkriteria = $alternatifDetail->id_subkriteria;

                                            // Periksa apakah nilaiprioritaskriteria ada
                                            if ($kriteria3->nilaiprioritaskriteria) {
                                                $nilai_prioritas_kriteria = $kriteria3->nilaiprioritaskriteria->nilai_prioritas;

                                                // Periksa apakah nilai_prioritas_kriteria ada
                                                if ($nilai_prioritas_kriteria) {
                                                    // Periksa apakah nilai_prioritas_subkriteria ada
                                                    $nilai_prioritas_subkriteria = $nilai_prioritas_subkriterias->where('id_subkriteria', $id_subkriteria)->first();

                                                    if ($nilai_prioritas_subkriteria) {
                                                        $total += $nilai_prioritas_subkriteria->nilai_prioritas * $nilai_prioritas_kriteria;
                                                    } else {
                                                        // Set pesan jika nilai_prioritas_subkriteria kosong
                                                        $message = "Nilai subkriteria kosong";
                                                        $total += 0; // Atau atur nilai default lainnya
                                                    }
                                                } else {
                                                    // Set pesan jika nilai_prioritas_kriteria kosong
                                                    $message = "Nilai kriteria kosong";
                                                    $total += 0; // Atau atur nilai default lainnya
                                                }
                                            } else {
                                                // Set pesan jika nilaiprioritaskriteria kosong
                                                $message = "Nilai kriteria kosong";
                                                $total += 0; // Atau atur nilai default lainnya
                                            }
                                        }
                                    }

                                    if ($total > 0) {
                                        $rank[] = [
                                            'alternatif_nama' => $alternatif->nama,
                                            'alternatif_nik' => $alternatif->nik,
                                            'total' => $total
                                        ];
                                    }
                                }
                                usort($rank, function ($b, $a) {
                                    return $a['total'] <=> $b['total'];
                                });
                            ?>

                            @if ($message)
                            <h1 class="mt-1 mb-3">{{ $total }}</h1>
                            <div class="mb-0">
                                <span class="text-muted">{{ $message }}</span>
                            </div>
                            @endif
                            @if (count($rank) > 0)
                            @foreach ($rank as $index => $alternative)
                            <h1 class="mt-1 mb-3">{{ number_format($alternative['total'], 2) }}</h1>
                            <div class="mb-0">
                                <span class="text-muted">{{ $alternative['alternatif_nama'] }}</span>
                            </div>
                            @break
                            @endforeach
                            @endif
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-xxl-7">
        <div class="card flex-fill w-100">
            <img src="/icon.png" class="flex-fill w-100">
        </div>
    </div>
</div>

@endsection