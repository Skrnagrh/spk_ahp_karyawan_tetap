@extends('dashboard.partials.main')

@section('content')

@section('title')Kriteria @endsection

@if (Auth::user()->admin == 'true')
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#create">
    Tambah Kriteria
</button>
@include('dashboard.kriteria.create')
@endcan

<div class="card mb-4">
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col" style="width:5%">No</th>
                    <th scope="col" style="width:65%">Nama Kriteria</th>
                    @if (Auth::user()->admin == 'true')
                    <th scope="col">Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($kriterias as $index => $kriteria)
                <tr class="text-center">
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $kriteria->nama_kriteria }}</td>
                    @if (Auth::user()->admin == 'true')
                    <td>
                        {{-- <a href="/subkriteria?id={{$kriteria->id}}" class="btn btn-success text-white text-capitalize"
                            style="cursor: pointer;">
                            Detail
                        </a> --}}
                        <a href="/kriteria/{{$kriteria->id}}" class="btn btn-success text-white text-capitalize"
                            style="cursor: pointer;">
                            subkriteria
                        </a>
                        <a class="btn btn-warning edit-link text-white text-capitalize" data-bs-toggle="modal"
                            data-bs-target="#exampleModal3" data-id="{{ $kriteria->id }}"
                            data-idNama="{{$kriteria->nama_kriteria}}" style="cursor: pointer;">
                            Edit
                        </a>
                        <a class="btn btn-danger delete-link text-white text-capitalize" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2" data-id="{{ $kriteria->id }}" style="cursor: pointer;">
                            Delete
                        </a>
                    </td>
                    @endif
                </tr>
                @include('dashboard.kriteria.edit')
                @include('dashboard.kriteria.delete')
                @endforeach
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
            var formAction = '/kriteria/destroy';
            $('#exampleModal2 form').attr('action', formAction);
        });

        $('.edit-link').click(function(e) {
            var id = $(this).data('id');
            let nama_kriteria = $(this).data('idnama');
            $('#nama_kriteria').val(nama_kriteria);
            $('#editInputId').val(id);
            console.log(`${nama_kriteria} ${id}`)
            var formActionEdit = '/kriteria/update';
            $('#exampleModal3 form').attr('action', formActionEdit);
        });
    });
</script>
@endsection


{{-- <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal3Label">Edit kriteria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Kriteria</label>
                        <input type="hidden" name="id_kriteria" id="editInputId">
                        <input type="text" class="form-control border px-2" id="nama_kriteria" name="nama_kriteria">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div> --}}

{{-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id_kriteria" id="deleteIdInput">

            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal2Label">Hapus kriteria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Hapus kriteria {{ $kriteria->nama_kriteria }}?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div> --}}
