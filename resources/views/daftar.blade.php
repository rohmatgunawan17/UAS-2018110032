@extends('layouts.app')
@extends('layouts.master')

@section('title', 'Data Penilangan')

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
                        <a href="/formDaftar" class="btn btn-outline-primary"><span>+ Tambah Data</span></a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Barang Bukti</th>
                    <th>No SIM /STNK</th>
                    <th>Nama</th>
                    <th>No Kendaraan</th>
                    <th>Tanggal Tilang</th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($daftar as $d)
            <tbody>
                <tr>
                    <th scope="row">{{$d->barang_bukti}}</th>
                        <td>{{$d->no_stnk_sim}}</td>
                        <td>{{$d->nama}}</td>
                        <td>{{$d->no_kendaraan}}</td>
                        <td>{{$d->tanggal_tilang}}</td>
                        <td style="width: 20%">
                            <a href="#"><i class="fas fa-eye" data-toggle="modal" data-target="#staticBackdrop"> detail  </i></a>
                            <a href="/daftar/edit"><i class="fas fa-pencil-alt"> Edit  </i></a>
                            <a href="#"><i class="fas fa-minus-circle"> Delete  </i></a>
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
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Rating</th>
                        <th>Description</th>
                    </tr>
                </thead>
                @foreach ($daftar as $d)
                <tbody>
                    <tr>
                        <th scope="row">{{$d->barang_bukti}}</th>
                            <td>{{$d->no_stnk_sim}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->no_kendaraan}}</td>
                            <td>{{$d->tanggal_tilang}}</td>
                            <td style="width: 40%">{{$d->pelanggaran}}
                            </td>
                            </tr>
                    @endforeach
                    <tr>
                        <td align="center" colspan="6">No data yet.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Ok</button>
        </div>
    </div>
    </div>
</div>
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
