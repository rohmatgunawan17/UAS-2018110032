@extends('layouts.master')
@section('title', $daftar->title)
@section('content')
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
   @endsection
