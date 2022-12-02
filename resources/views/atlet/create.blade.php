@extends('master')
@section('title','Tambah Data')

@section('content')
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Data</h2>
                <p>Silahkan masukkan data dengan benar dan lengkap!</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <form action="{{route('atlet.store')}}" method="POST">
                    @csrf
                    <div class="form-row py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="kode_sektor" class="form-label">Kode Sektor</label>
                                    <input type="text" name="kode_sektor" id="kode_sektor" placeholder="Masukkan Kode sektor" class="form-control" value="{{old('kode_sektor')}}">
                                    @error('kode_sektor')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                    <div class="col">
                                    <label for="nama_atlet" class="form-label">Nama Atlet</label>
                                    <input type="text" name="nama_atlet" id="nama_atlet" placeholder="Masukkan Nama Atlet" class="form-control" value="{{old('nama_atlet')}}">
                                    @error('nama_atlet')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3">
                                    <label for="nama_sektor" class="form-label">Nama Sektor</label>
                                    <input type="text" name="nama_sektor" id="nama_sektor" placeholder="Masukkan Nama Sektor" class="form-control" value="{{old('nama_sektor')}}">
                                    @error('nama_sektor')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col my-3">
                                    <label for="negara" class="form-label">Negara</label>
                                    <input type="text" name="negara" id="negara" placeholder="Masukkan Negara" class="form-control" value="{{old('negara')}}">
                                    @error('negara')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse py-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
