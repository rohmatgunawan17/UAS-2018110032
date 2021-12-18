@extends('layouts.master')
{{-- @extends('layouts.app') --}}
@section('title', 'Tambah Data Bukti')
@section('content')

<div style="background-color: rgba(202, 199, 199, 0.918)">
    <div class="col-sm-6">
        <h2>Tambah Data </h2>
    </div>
<form action="{{ route('pengaturan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6 p-4">
            <label for="nama">Nama </label>
            <input type="text" class="form-control @error('bukti') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 p-4">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" value="{{ old('keterangan') }}">
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-3 p-4">
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
        <input class="btn btn-outline-danger" action="action"  onclick="window.history.go(-1); return false;"   type="submit" value="Batal">
    </div>
    </div>

</form>
@endsection

@push('js_after')
<script src="{{ asset('js/tes.js') }}"><script>
<script>
 // Untuk upload file
 $(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    console.log(fileName);
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

</script>
@endpush
