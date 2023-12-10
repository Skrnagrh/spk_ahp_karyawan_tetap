@extends('dashboard.partials.main')

@section('content')

@section('title')Data Pengguna @endsection
<div class="container-fluid">
    @if (Auth::user()->admin == 'true')

    <a class="btn btn-info mb-3" data-bs-toggle="modal" data-bs-target="#mocreat" data-bs-whatever="@mdo">Tambah
        Pengguna</a>
    @include('dashboard.datapengguna.create')
    @endif

    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-striped border">
                    <thead class=" text-center">
                        <tr style="text-transform: capitalize">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user1 as $user)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center" style="text-transform: capitalize">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center" style="text-transform: capitalize">{{ $user->admin }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="/datapengguna/{{ $user->id }}/edit" class="btn btn-warning text-light me-2"
                                    data-bs-toggle="modal" data-bs-target="#penggunaedit{{ $user->id }}">Ubah
                                </a>

                                @include('dashboard.datapengguna.edit')
                                @include('dashboard.datapengguna.delete')



                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
