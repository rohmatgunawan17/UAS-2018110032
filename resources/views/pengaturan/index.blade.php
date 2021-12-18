
@extends('layouts.master')

@section('title', 'Data Penilangan')
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
@endif
@section('content')
<div class="container pt-4 " style="background-color: rgba(202, 199, 199, 0.918)">
    <div class="table-wrapper">
        {{-- <div class="table-title">
            <div class="row">
                <div class="col-sm-15 p-4">
                    <div class="p-2">

                        <a href={{route('pengaturan.create')}} class="btn btn-outline-primary"><span>+ Tambah Tempat Sidang</span></a>
                        <a href={{route('pengaturan.create')}} class="btn btn-outline-primary"><span>+ Tambah Status Tilang</span></a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-6 p-4">
                <h2>Daftar Bukti    </h2>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 4%">No</th>
                            <th style="width: 15%">Nama</th>
                            <th style="width: 20%">Keterangan</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($bukti as $data)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->nama }}</td>
                            <td style="width: 10%">{{ $data->keterangan }}</td>
                            <td style="width: 4%">
                                <button class="btn btn-outline-danger btn-sm">
                                    <a href="{{ route('pengaturan.destroy', $data->id) }}" ><i> - Hapus</i></a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <a href={{route('pengaturan.create')}} class="btn btn-outline-primary"><span>+ Tambah Barang Bukti</span></a>
                </table>
            </div>
            <div class="col-md-6 p-4">
                <h2>Daftar Tempat Sidang</h2>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 4%">No</th>
                            <th style="width: 15%">Nama</th>
                            <th style="width: 20%">Keterangan</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($bukti as $data)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->nama }}</td>
                            <td style="width: 10%">{{ $data->keterangan }}</td>
                            <td style="width: 4%">
                                <button class="btn btn-outline-danger btn-sm">
                                    <a href="{{ route('pengaturan.destroy', $data->id) }}" ><i> - Hapus</i></a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <a href={{route('pengaturan.create')}} class="btn btn-outline-primary"><span>+ Tambah Tempat Sidang</span></a>
                </table>
            </div>
            <div class="col-md-6 p-4">
                <h2>Daftar Status</h2>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 4%">No</th>
                            <th style="width: 15%">Nama</th>
                            <th style="width: 20%">Keterangan</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($bukti as $data)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->nama }}</td>
                            <td style="width: 10%">{{ $data->keterangan }}</td>
                            <td style="width: 4%">
                                <button class="btn btn-outline-danger btn-sm">
                                    <a href="{{ route('pengaturan.destroy', $data->id) }}" ><i> - Hapus</i></a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <a href={{route('pengaturan.create')}} class="btn btn-outline-primary"><span>+ Tambah Status</span></a>
                </table>
            </div>
        </div>

        <br>
        <div class="text-left py-md-2">
            {{-- Halaman : {{ $daftar->links() }} --}}
        </div>
    </div>
</div>
@endsection
