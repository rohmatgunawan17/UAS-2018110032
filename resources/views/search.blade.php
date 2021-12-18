@extends('layouts.master')
@section('title', 'Search')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            {{-- <div class="col-md-4"> --}}
                {{-- <div class="float-right">
                    <div class="btn-group" role="group">
                        <button class="btn btn-outline-primary ml-3"><a href="{{ route('daftar.edit', $daftar->id) }}" >Ubah</a></button>
                        <form action="{{ route('daftar.destroy', $daftar->id) }}" method="POST">
                            <button type="submit" class="btn btn-outline-danger ml-3">Hapus</button>
                            @method('DELETE')
                            @csrf
                        </form>
                    </div>
                </div> --}}
            {{-- </div> --}}
            <h1 class="card-title">Data Pelanggar</h1><br>
            {{-- <h6 class="card-subtitle">{{ $daftar->nama }}</h6><br> --}}
            <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Barang Bukti</th>
                            <th>No SIM /STNK / Kendaraan</th>
                            <th>Alamat</th>
                            <th>Tanggal Sidang</th>
                            <th>Tempat Sidang</th>
                            <th>Status</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                    @foreach ($daftar as $data)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->barang_bukti }}</td>
                            <td>{{ $data->no }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->tanggal_sidang }}</td>
                            <td>
                                @if ($data->tempat_sidang==1)
                                Kejaksaan Negri
                                @elseif ($data->tempat_sidang ==2)
                                    Polrestabes
                                        @elseif ($data->tempat_sidang==3)
                                    Polsek
                                @endif
                            </td>
                            <td>
                                @if ($data->status_penilangan==1)
                                 Sedang Berlangsung
                                @elseif ($data->status_penilangan ==2)
                                    Tidak Mengadiri Persidangan
                                        @elseif ($data->status_penilangan==3)
                                    Selesai
                                @endif
                            </td>
                            <td>Rp {{ number_format($data->total_denda, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
