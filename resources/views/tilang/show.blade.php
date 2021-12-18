@extends('layouts.master')
@section('title', $daftar->nama)
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="card">
        <div class="card-body">
            {{-- <div class="col-md-4"> --}}
                <div class="float-right">
                    <div class="btn-group" role="group">
                            <a href="{{ route('daftar.edit', $daftar->id) }}" class="btn btn-outline-primary ml-3"><span> Ubah</span></a>
                        <form action="{{ route('daftar.destroy', $daftar->id) }}" method="POST">
                            <button type="submit" class="btn btn-outline-danger ml-3"> <span> Hapus</span></button>
                            @method('DELETE')
                            @csrf
                        </form>
                    </div>
                </div>
            {{-- </div> --}}
            <h1 class="card-title">Data Lengkap </h1><br>
            {{-- <h6 class="card-subtitle">{{ $daftar->nama }}</h6><br> --}}
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="/storage/{{ $daftar->pelaku }}" style="width: 70%" class="rounded float-start"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h2 class="box-title mt-5">Nama : {{ $daftar->nama }}</h2>
                    <h5> Beralamatkan di <b> {{ $daftar->alamat }} </b>Melakukan Pelanggaran <b> {{ $daftar->pelanggaran }} </b></h5>
                    <h4 class="mt-5">Total denda yang harus di keluarkan<br>
                       <small class="text-danger">Rp {{ number_format($daftar->total_denda, 2) }}</small>
                    </h4>
                    {{-- <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                    <button class="btn btn-primary btn-rounded">Buy Now</button> --}}
                    <h5 class="box-title mt-5">Status Persidangan</h5>
                    <ul class="list-unstyled">
                        @if ($daftar->status_penilangan==1)
                            <li><i class="fas fa-walking text-info"></i> Sedang Berlangsung</li>
                        @elseif ($daftar->status_penilangan ==2)
                            <li><i class="fa fa-minus text-success"></i> Tidak Mengadiri Persidangan</li>
                                @elseif ($daftar->status_penilangan==3)
                            <li><i class="fa fa-check text-success"></i> Selesai</li>
                        @endif
                    </ul>
                    <li class="list-inline-item"> Tanggal Ditilang<br>
                        <i class="fa fa-calendar fa-fw"></i>
                        {{ $daftar->tanggal_tilang }}<br>
                    </li>
                    <li class="list-inline-item"> Tanggal Sidang<br>
                        <i class="fa fa-calendar fa-fw"></i>
                        {{ $daftar->tanggal_sidang }}<br>
                    </li>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">Info lainnya</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-product">
                            <tbody>
                                <tr>
                                    <td width="390">Barang Bukti</td>
                                    <td>
                                        @if ($daftar->barang_bukti==1)
                                            SIM
                                        @elseif ($daftar->barang_bukti ==2)
                                            STNK
                                                @elseif ($daftar->barang_bukti==3)
                                            Kendaraan
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>No STNK / SIM / Kendaraan</td>
                                    <td>{{ $daftar->no }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Sidang</td>
                                    <td>
                                        @if ($daftar->tempat_sidang==1)
                                            Kejaksaan Negeri
                                        @elseif ($daftar->tempat_sidang ==2)
                                            Polrestabes
                                        @elseif ($daftar->tempat_sidang==3)
                                            Polsek
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   @endsection
