<div class="card col-12 p-4">
<form method="post" action="/perhitungan/store">
    @csrf
    @method('POST')
    <table class="table border">
        <thead>
            <tr class="text-center">
                <th scope="col" style="width:10%">Kriteria</th>
                @foreach ($kriterias as $kriteria1)
                <th scope="col">{{$kriteria1->nama_kriteria}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($kriterias as $outerIndex => $kriteria2)
            <tr class="text-center">
                <td class="fw-bold">{{$kriteria2->nama_kriteria}}</td>
                @foreach ($kriterias as $innerIndex => $kriteria3)
                <td>
                    @if ((count($kriterias) * count($kriterias)) != count($perhitungans_all))
                    <select name="{{$kriteria2->nama_kriteria . '[]'}}"
                        class="form-select px-4 matrix_select" style="padding: 5px 20px"
                        {{$innerIndex==$outerIndex ? 'disabled' : '' }}
                        data-id="{{$innerIndex . ',' . $outerIndex}}">
                        @foreach (range(1,9) as $point)
                        <option value="{{$point}}">{{$point}}</option>
                        @endforeach
                    </select>
                    @else

                    <select name="{{ $kriteria2->nama_kriteria . '[]' }}"
                        class="form-select px-4 matrix_select" style="padding: 5px 20px" {{
                        $innerIndex==$outerIndex ? 'disabled' : '' }}
                        data-id="{{ $innerIndex . ',' . $outerIndex }}">
                        @if (count($kriteria2->perhitungans))
                        @if ($kriteria2->perhitungans[$innerIndex])
                        <option value="{{ $kriteria2->perhitungans[$innerIndex]->nilai }}"
                            data-dynamic="true">
                            {{ number_format($kriteria2->perhitungans[$innerIndex]->nilai, 2) }}
                        </option>
                        @endif
                        @endif
                        @foreach ($kriteria2->perhitungans as $perhitungan)
                        <option value="{{ $perhitungan->nilai }}" {{ $perhitungan->nilai ==
                            $kriteria2->perhitungans[$innerIndex]->nilai ? 'selected' : '' }}>
                            {{ number_format($perhitungan->nilai, 2) }}
                        </option>
                        @endforeach
                    </select>

                    @endif

                </td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (Auth::user()->admin == 'true')
    <div class="col-12 text-end">
        <button type="submit" class="btn btn-info">
            Hitung Nilai
        </button>
    </div>
    @endif
</form>
</div>
