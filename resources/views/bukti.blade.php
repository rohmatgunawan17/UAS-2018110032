
@extends('layouts.master')
{{-- @extends('layouts.app') --}}
@section('title', 'Tambah Data')
@section('content')
<select class="form-control" >
    <option name="barang_bukti" value="" disabled selected >Pilih</option>
    @foreach ( $bukti as $item )
    <option value="{{$item->id}}">{{$item->nama}}</option>
    @endforeach

    {{-- <option value="{{ old('bukti') }}">SIM</option>
    <option value="{{ old('bukti') }}">SEPEDA MOTOR</option> --}}
</select>
@endsection
