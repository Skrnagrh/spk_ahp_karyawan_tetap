@extends('dashboard.partials.main')

@section('content')
@section('title')Matrix Subkriteria @endsection


<div class="card col-md-12 p-4">
    <table class="table table-striped border">
        <thead>
            <tr class="text-center">
                <th scope="col" style="width:5%">No</th>
                <th scope="col" style="width:65%">Nama Kriteria</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kriterias as $index => $kriteria)
            <tr class="text-center">
                <th scope="row">{{$index + 1}}</th>
                <td>{{$kriteria->nama_kriteria}}</td>
                <td>
                    <a href="/perhitungan_subkriteria/matrix?id={{$kriteria->id}}"
                        class="btn btn-info text-capitalize">
                        @if (Auth::user()->admin == 'true')
                        Input Nilai
                        @endif
                        @if (Auth::user()->admin == 'false')
                        Lihat Nilai
                        @endif
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
