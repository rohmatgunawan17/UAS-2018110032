{{-- @extends('layouts.app') --}}
@extends('layouts.master')

@section('title', 'Daftar Penduduk')
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
@endif
@section('content')
<div class="container pt-4 " style="background-color: rgba(202, 199, 199, 0.918)">
    <div class="col p-4">
        <div class="row gy-4">
            <div class="col-md-12">
                <form action="{{url('/search')}}" type="get">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search data . . ." aria-label="Search" aria-describedby="search-addon" name="search"/>
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                    <th>No</th>
                    <td>Barang Bukti</td>
                    <th>No SIM /STNK</th>
                    <th>Nama</th>
                    <th>No Kendaraan</th>
                    <th>Tanggal Tilang</th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($daftar as $movie)
            <tbody>
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->rating }}</td>
                    <td>{{ $movie->description }}</td>
                    <td style="width: 10%">
                        <a href="{{ route('daftar.show', $movie->id) }}"><i class="fas fa-eye" > Detail  </i></a>
                        <a href="{{ route('daftar.edit', $movie->id) }}"><i class="fas fa-pencil-alt"> Edit  </i></a>
                        <a href="{{ route('daftar.destroy', $movie->id) }}" ><i class="fas fa-minus-circle"> Delete  </i></a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td align="center" colspan="6">Tidak ada data lagi</td>
                </tr>
            </tbody>
        </table>
        <div class="text-left py-md-2">
            Halaman :
            @for ($i = 1; $i < 9; $i++)
            <button type="button" class="btn btn-dark">
            {{$i}}
            </button>
            @endfor
        </div>
    </div>
</div>

{{-- MODAL DETAIL --}}
{{-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="col-md-12">
            <h2>{{ $daftar->title }}</h2>
            <h5>
            <span class="badge badge-primary">
            <i class="fa fa-star fa-fw"></i>
            {{ $daftar->rating }}
            </span>
            </h5>
            <p>
            <ul class="list-inline">
            <li class="list-inline-item">
            <i class="fa fa-th-large fa-fw"></i>
            <em>{{ $daftar->genre }}</em>
            </li>
            <li class="list-inline-item">
            <i class="fa fa-calendar fa-fw"></i>
            {{ $daftar->year }}
            </li>
            </ul>
            </p>
            <hr>
            <p class="lead">{{ $daftar->description }}</p>
            </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Ok</button>
        </div>
    </div>
    </div>
</div> --}}
@endsection


{{-- <table style="scale: 80%">
            <!-- On rows -->
            <tr class="table-active">...</tr>
            <tr class="table-primary">...</tr>
            <tr class="table-secondary">...</tr>
            <tr class="table-success">...</tr>
            <tr class="table-danger">...</tr>
            <tr class="table-warning">...</tr>
            <tr class="table-info">...</tr>
            <tr class="table-light">...</tr>
            <tr class="table-dark">...</tr>

            <!-- On cells (`td` or `th`) -->
            <tr>
            <td class="table-active">...</td>
            <td class="table-primary">...</td>
            <td class="table-secondary">...</td>
            <td class="table-success">...</td>
            <td class="table-danger">...</td>
            <td class="table-warning">...</td>
            <td class="table-info">...</td>
            <td class="table-light">...</td>
            <td class="table-dark">...</td>
            </tr>
        </table> --}}
