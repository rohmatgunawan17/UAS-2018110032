@extends('layouts.master')
{{-- @extends('layouts.app') --}}
@section('title', 'Edit Data')
@section('content')

<div style="background-color: rgba(202, 199, 199, 0.918)">
    <div class="col-sm-6">
        <h2>Ubah Data Penilangan</h2>
    </div>
<form action="{{ route('daftar.update', ['daftar' => $daftar->id]) }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="row">
        <div class="col-md-6 p-4 ">
            <label for="bukti">Tipe Barang Bukti</label>
            {{-- <input type="text" class="form-control @error('barang_bukti') is-invalid @enderror" name="barang_bukti" id="barang_bukti" value="{{ old('barang_bukti') }}"> --}}
                <select name="barang_bukti" class="form-control @error('tempat') is-invalid @enderror" >
                    <option value="" disabled selected >Select</option>
                    @if ($daftar->barang_bukti == 1)
                    <option value="1" selected>SIM</option>
                    <option value="2">STNK</option>
                    <option value="3">Kendaraan</option>
                    @elseif ($daftar->barang_bukti == 2)
                    <option value="1" >SIM</option>
                    <option value="2" selected>STNK</option>
                    <option value="3" >Kendaraan</option>
                    @elseif ($daftar->barang_bukti == 3)
                    <option value="1" >SIM</option>
                    <option value="2" >STNK</option>
                    <option value="3" selected>Kendaraan</option>
                    @endif


                </select>
                {{-- <option value="{{ old('bukti') }}">SIM</option>
                <option value="{{ old('bukti') }}">SEPEDA MOTOR</option> --}}
            @error('barang_bukti')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 p-4">
            <label for="no">No : SIM / STNK / Kendaraan</label>
            <input type="text" class="form-control @error('no') is-invalid @enderror" name="no" id="no" value="{{ old('no')  ?? $daftar->no}}">
            @error('no')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 p-4 ">
            <label for="nama">Nama Pelanggar</label>
            <input type="text" class="form-control @error('titnamale') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') ?? $daftar->nama}}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 p-4">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" name="alamat" id="alamat" value="{{ old('alamat') ?? $daftar->alamat}}">
            @error('alamat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 p-4">
            <label for="tanggal_tilang">Tanggal Tilang</label>
            <input type="date" class="form-control @error('tanggal_tilang') is-invalid @enderror" name="tanggal_tilang" id="tanggal_tilang" value="{{ old('tanggal_tilang') ?? $daftar->tanggal_tilang}}">
            @error('tanggal_tilang')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 p-4">
            <label for="tanggal_sidang">Tanggal Sidang</label>
            <input type="date" class="form-control @error('tanggal_sidang') is-invalid @enderror" name="tanggal_sidang" id="tanggal_sidang" value="{{ old('tanggal_sidang') ?? $daftar->tanggal_sidang}}">
            @error('tanggal_sidang')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 p-4">
            <label for="pelanggaran">Pelanggaran</label>
            <input class="form-control @error('pelanggaran') is-invalid @enderror" name="pelanggaran" id="pelanggaran" rows="3" value="{{ old('pelanggaran') ?? $daftar->pelanggaran}}"</input>
            @error('pelanggaran')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 p-4">
            <label for="total_denda">Total Denda</label>
            <input type="number" class="form-control @error('total_denda') is-invalid @enderror" name="total_denda" id="total_denda" min="25000" max="2500000" value="{{ old('total_denda') ?? $daftar->total_denda}}">
            @error('total_denda')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 p-4">
            <label for="tempat_sidang">Temat Sidang</label>
            <select class="form-control @error('tempat_sidang') is-invalid @enderror" >
                <option value="" disabled selected >Select</option>
                    @if ($daftar->tempat_sidang == 1)
                    <option value="1" selected>Kejaksaan Negri</option>
                    <option value="2">Porlestabes</option>
                    <option value="3">Polsek</option>
                    @elseif ($daftar->tempat_sidang == 2)
                    <option value="1">Kejaksaan Negri</option>
                    <option value="2" selected>Porlestabes</option>
                    <option value="3">Polsek</option>
                    @elseif ($daftar->tempat_sidang == 3)
                    <option value="1">Kejaksaan Negri</option>
                    <option value="2">Porlestabes</option>
                    <option value="3" selected>Polsek</option>
                    @endif
            </select>
            @error('tempat_sidang')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 p-4">
            <label for="status_penilangan">Status</label>
            <select class="form-control @error('status_penilangan') is-invalid @enderror" >
                <option value="" disabled selected >Select</option>
                    @if ($daftar->status_penilangan == 1)
                    <option value="1" selected>Berjalan</option>
                    <option value="2" >Tidak Menghadiri Sidang</option>
                    <option value="3" >Selesai</option>
                    @elseif ($daftar->status_penilangan == 2)
                    <option value="1" >Berjalan</option>
                    <option value="2" selected>Tidak Menghadiri Sidang</option>
                    <option value="3" >Selesai</option>
                    @elseif ($daftar->status_penilangan == 3)
                    <option value="1" >Berjalan</option>
                    <option value="2" >Tidak Menghadiri Sidang</option>
                    <option value="3" selected>Selesai</option>
                    @endif

            </select>
            @error('status_penilangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group p-2">
        <label for="pelaku">Foto Pelaku </label>
        <div class="input-group">
            <div class="input-group-prepend">
                {{-- <span class="input-group-text" id="image-label">Image</span> --}}
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="pelaku" id="pelaku">
                <label class="custom-file-label" for="pelaku" value="file">Choose file</label>
            </div>
            </div>
            @error('pelaku')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    <div class="col-md-6 mb-3 p-4">
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
        <input class="btn btn-outline-danger" action="action"  onclick="window.history.go(-1); return false;"   type="submit" value="Batal">
    </div>
    </div>

</form>
@endsection

@push('js_after')
<script>
 // Untuk upload file
 $(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endpush

