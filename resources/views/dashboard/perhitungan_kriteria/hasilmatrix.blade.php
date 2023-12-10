<div class="row mt-4 mb-5">
    <div class="card col-12 p-4">
        <h4 class="mb-4">Matrix Nilai Kriteria</h4>
        @if (count($kriterias))
        <table class="table border">
            <thead>
                <tr class="text-center">
                    <th class="border w-10" scope="col">Kriteria</th>
                    @foreach ($kriterias as $kriteria1)
                    <th class="border" scope="col">{{$kriteria1->nama_kriteria}}</th>
                    @endforeach
                    <th class="border w-10" scope="col">Jumlah</th>
                    <th class="border w-10" scope="col">Prioritas</th>
                </tr>
            </thead>
            <tbody>
                <?php $max_lamda = 0; ?>
                @foreach ($kriterias as $outerIndex2 => $kriteria4)
                <tr class="text-center">
                    <td class="fw-bold border">{{$kriteria4->nama_kriteria}}</td>
                    <?php $jml_nilai = 0; ?>
                    @foreach ($kriterias as $innerIndex2 => $kriteria3)
                    <td class="border">
                        @if (count($kriteria4->perhitungans))
                        @if ($kriteria4->perhitungans[$innerIndex2])
                        <?php
                                    $jml_nilai += $kriteria4->perhitungans[$innerIndex2]->nilai / $total_nilai_prioritas[$innerIndex2];
                                    $nilai_p_kriteria = $kriteria4->perhitungans[$innerIndex2]->nilai / $total_nilai_prioritas[$innerIndex2];
                                ?>
                        {{number_format($nilai_p_kriteria, 2)}}
                        @endif
                        @endif
                    </td>
                    @endforeach
                    <td class="border">{{number_format($jml_nilai, 2)}}</td>
                    <td class="border">{{number_format($jml_nilai/count($kriterias), 2)}}</td>
                </tr>
                <?php $max_lamda += ($jml_nilai/count($kriterias)) * $total_nilai_prioritas[$outerIndex2]; ?>
                @endforeach
            </tbody>
        </table>
        <h3>Perhitungan Consistensi Ratio</h3>
        <div class="col-12 my-2 w-100 mx-auto">
            <?php
                $length = count($kriterias);
                $ci = ($max_lamda - $length) / ($length-1);
            ?>
            <p class="p-0 m-0" style="color: #333">Max λ = {{number_format($max_lamda, 2)}}</p>
            <p class="p-0 m-0" style="color: #333">n = {{$length}}</p>
            <div class="row">
                <div class="col-6">
                    <p class="p-0 m-0" style="color: #333">Consistensi Index = (max λ - n) / (n-1)
                    </p>
                    <p class="p-0 m-0" style="color: #333">CI = ({{number_format($max_lamda, 2)}} -
                        {{$length}}) / {{$length-1}}</p>
                    <p class="p-0 m-0" style="color: #333">CI = {{number_format($ci, 2)}}</p>
                </div>
                <div class="col-6">
                    <p class="p-0 m-0" style="color: #333">Consistensi Ratio = CI/IR</p>
                    <p class="p-0 m-0" style="color: #333">CR =
                        {{number_format(number_format($ci,2))}} / {{$nilai_index_random}}</p>
                    <p class="p-0 m-0" style="color: #333">CR =
                        {{number_format($ci/$nilai_index_random , 2)}}</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>