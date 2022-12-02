@extends('master')
@section('title', 'Dashboard Atlet')

@section('content')
    <style>
        .bdr {
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2>Dashboard Atlet Bulu Tangkis Dunia</h2>
                    <form class="form-inline">
                        <a href="{{ route('atlet.create') }}" class="btn btn-primary">Tambah</a>
                    </form>
                </div>
                <div class="py-4">
                    @if (session()->has('message'))
                        <div class="my-3">
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="table-responsive bdr ">
                    <table class="table table-striped">
                        <thead class="bg-success text-white">
                            <tr align="center">
                                <th>No</th>
                                <th>Kode Sektor</th>
                                <th>Nama Atlet</th>
                                <th>Nama Sektor</th>
                                <th>Negara</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($atlets as $atlet)
                                <tr align="center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $atlet->sektor->kode_sektor ?? 0 }}</td>
                                    <td>{{ $atlet->nama_atlet }}</td>
                                    <td>{{ $atlet->sektor->nama_sektor ?? 0 }}</td>
                                    <td>{{ $atlet->negara ?? 0 }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="{{ route('atlet.edit', ['atlet' => $atlet->id]) }}"
                                                class="btn btn-warning btn-block">Edit</a>
                                            <form action="{{ route('atlet.destroy', ['atlet' => $atlet->id]) }}"
                                                method="POST" class="ms-1">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="11">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
