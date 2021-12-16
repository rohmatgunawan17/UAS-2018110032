
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
                        <a href="/daftar/create" class="btn btn-outline-primary"><span>+ Tambah Data</span></a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width: 4%">No</th>
                    <th>Pelaku</th>
                    <th>No SIM /STNK / Kendaraan</th>
                    <th>Nama</th>
                    <th style="width: 30%">Alamat</th>
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
                            <img src="/storage/{{ $data->pelaku }}" style="width: 8%">
                        </a>
                    </figure></td>
                    <td>{{ $data->no }}</td>
                    <td>{{ $data->nama }}</td>
                    <td style="width: 30%">{{ $data->alamat }}</td>
                    <td>{{ $data->status_penilangan }}</td>
                    <td style="width: 5%">
                        <a href="{{ route('daftar.show', $data->id) }}"><i class="fas fa-eye" > Detail  </i></a>
                        <a href="{{ route('daftar.edit', $data->id) }}"><i class="fas fa-pencil-alt"> Edit  </i></a>
                        <a href="{{ route('daftar.destroy', $data->id) }}" ><i class="fas fa-minus-circle"> Delete  </i></a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td align="center" colspan="7">Tidak ada data lagi</td>
                </tr>
            </tbody>
        </table>
        {{-- <div class="text-left py-md-2">
            Halaman :
            @for ($i = 1; $i < 9; $i++)
            <button type="button" class="btn btn-dark">
            {{$i}}
            </button>
            @endfor
        </div> --}}
    </div>
</div>
@endsection
