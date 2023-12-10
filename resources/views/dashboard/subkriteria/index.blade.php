@extends('dashboard.partials.main')

@section('content')
@section('title')List Subkriteria @endsection

@if (Auth::user()->admin == 'true')
<a href="/kriteria" class="btn btn-info">
    Tambah Subkriteria
</a>
@endif

<div class="container-fluid">
    <div class="card col-12 p-4 mb-5">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col" style="width:5%">No</th>
                    <th scope="col" style="width:65%">Nama Kriteria</th>
                    <th scope="col" style="width:65%">Nama Subkriteria</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subkriterias as $subkriteria)
                <tr class="text-center">
                    <th scope="row">{{$subkriteria->id + 1}}</th>
                    <td>{{$subkriteria->kriteria->nama_kriteria}}</td>
                    <td>{{$subkriteria->nama_subkriteria}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
