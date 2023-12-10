@extends('dashboard.partials.main')

@section('content')
@section('title')List Subkriteria @endsection

<div class="container-fluid">

    @if (Auth::user()->admin == 'true')
    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Subkriteria
    </button>
    @include('dashboard.subkriteria.create')
    @endif

    <div class="card col-12 p-4 mb-5">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col" style="width:5%">No</th>
                    <th scope="col" style="width:65%">Nama Kriteria</th>
                    <th scope="col" style="width:65%">Nama Subkriteria</th>
                    @if (Auth::user()->admin == 'true')
                    <th scope="col">Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($subkriterias as $subkriteria)
                <tr class="text-center">
                    <th scope="row">{{$subkriteria->id + 1}}</th>
                    <td>{{$subkriteria->kriteria->nama_kriteria}}</td>
                    <td>{{$subkriteria->nama_subkriteria}}</td>
                    @if (Auth::user()->admin == 'true')
                    <td>
                        <button class="btn btn-warning edit-link" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                            data-id="{{ $subkriteria->id }}" data-idNama="{{$subkriteria->nama_subkriteria}}">
                            Edit
                        </button>
                        <button class="btn btn-danger delete-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2" data-id="{{ $subkriteria->id }}">
                            Delete
                        </button>
                    </td>
                    @endif
                </tr>
                @endforeach
                @include('dashboard.subkriteria.edit')
                @include('dashboard.subkriteria.delete')
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
            $('.delete-link').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $('#deleteIdInput').val(id); // Set the value of the hidden input field
                var formAction = '/subkriteria/destroy';
                $('#exampleModal2 form').attr('action', formAction);
            });
            $('.edit-link').click(function(e) {
                var id = $(this).data('id');
                let nama_subkriteria = $(this).data('idnama');
                $('#nama_subkriteria').val(nama_subkriteria);
                $('#editInputId').val(id);
                console.log(`${nama_subkriteria} ${id}`)
                var formActionEdit = '/subkriteria/update';
                $('#exampleModal3 form').attr('action', formActionEdit);
            });
        });
</script>
@endsection
