@extends('layouts.master')

@section('title', 'Daftar Penduduk')

@section('content')
<div class="container pt-4 bg-white">
    <div class="col p-4">
        <div class="row gy-4">
            <div class="col-md-12">
                <form action="{{url('/search')}}" type="get">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search Pokedex" aria-label="Search"
                        aria-describedby="search-addon" name="search" />
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
                    <h2>Daftar Penduduk</h2>
                    <div class="py-2">
                        <a href="/formDaftar" class="btn btn-outline-primary"><span>+ Tambah Data</span></a>
                    </div>
                </div>
            </div>
        </div>
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
            <tbody>
            {{-- @forelse ($movies as $movie) --}}
                <tr>
                    <th scope="row">1</th>
                        <td>2</td>
                        <td>3</td>
                        <td>5</td>
                        <td>5</td>
                    <td style="width: 40%">6</td>
                </tr>
            {{-- @empty --}}
                <tr>
                    <td align="center" colspan="6">No data yet.</td>
                </tr>
            {{-- @endforelse --}}
            </tbody>
        </table>
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
