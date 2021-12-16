@extends('layouts.master')
@section('title', $daftar->nama)
@section('content')
<div class="col-md-12">
 <h2>{{ $daftar->nama }}</h2>
 <h5>
 <span class="badge badge-primary">
 <i class="fa fa-star fa-fw"></i>
 {{ $daftar->no }}
 </span>
 </h5>
 <p>
 <ul class="list-inline">
 <li class="list-inline-item">
 <i class="fa fa-th-large fa-fw"></i>
 <em>{{ $daftar->barang_bukti }}</em>
 </li>
 <li class="list-inline-item">
    <i class="fa fa-calendar fa-fw"></i>
    {{ $daftar->total_denda }}
    </li>
    </ul>
    </p>
    <hr>
    <p class="lead">{{ $daftar->description }}</p>
    <div class="col-md-4">
        <div class="float-right">
        <div class="btn-group" role="group">
        <a href="{{ route('daftar.edit', $daftar->id) }}"
        class="btn btn-primary ml-3">Edit</a>
        <form action="{{ route('daftar.destroy', $daftar->id) }}" method="POST">
        <button type="submit" class="btn btn-danger ml-3">Delete</button>
        @method('DELETE')
        @csrf
        </form>
        </div>
        </div>
        </div
   </div>
   @endsection
