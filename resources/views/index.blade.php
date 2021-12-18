
@extends('layouts.master')

@section('title', 'Data Penilangan')
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
@endif
@section('content')
<div class="container pt-4 " style="background-color: rgba(202, 199, 199, 0.918)">
    {{-- <div class="col p-4">
        <div class="row gy-4">
            <div class="col-md-12">
                <form action="{{url('/search')}}" type="get">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search data . . ." aria-label="Search" aria-describedby="search-addon" name="search"/>
                        <button type="submit" class="btn btn-outline-secondary">search</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Data Penilangan</h2>
                    <div class="py-2">
                        <a href={{route('daftar.create')}} class="btn btn-outline-primary"><span>+ Tambah Data</span></a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width: 4%">No</th>
                    <th style="width: 15%">Pelaku</th>
                    <th style="width: 20%">No SIM /STNK / Kendaraan</th>
                    <th>Nama</th>
                    <th style="width: 40%">Alamat</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($daftar as $data)
            <tbody>
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><figure class="figure " >
                        <a href="#">
                            <img src="/storage/{{ $data->pelaku }}" style="width: 50%">
                        </a>
                    </figure></td>
                    <td>{{ $data->no }}</td>
                    <td>{{ $data->nama }}</td>
                    <td style="width: 30%">{{ $data->alamat }}</td>
                    <td>{{ $data->status_penilangan }}</td>
                    <td style="width: 4%">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                              Lainnya
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <button class="btn btn-outline-info btn-sm">
                                    <a href="{{ route('daftar.show', $data->id) }}"><i class="fas fa-eye" > Detail</i></a>
                                </button>
                                <button class="btn btn-outline-warning btn-sm">
                                    <a href="{{ route('daftar.edit', $data->id) }}"><i class="fas fa-pencil-alt"> Edit</i></a>
                                </button>
                                <button class="btn btn-outline-danger btn-sm">
                                    <a href="{{ route('daftar.destroy', $data->id) }}" ><i class="fas fa-minus-circle"> Hapus</i></a>
                                </button>
                            </div>
                          </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="text-left py-md-2">
            Halaman : {{ $daftar->links() }}
        </div>
    </div>
</div>
@endsection
