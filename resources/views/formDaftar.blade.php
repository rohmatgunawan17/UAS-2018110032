@extends('layouts.master')

@section('title', 'Daftar Penduduk')

@section('content')
<div class="container pt-4" style="background-color: rgba(202, 199, 199, 0.918)">
    <div class="col p-4">
        <div class="row gy-4">
            <div class="col-md-12">
                <form action="{{url('/search')}}" type="get">
                    <div class="input-group">
                        <label for="npm">NPM</label>&nbsp;
                        <input type="text" class="form-control rounded" placeholder="Search data . . ." name="npm"/>
                        {{-- <button type="submit" class="btn btn-outline-primary">search</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-20 col-xl-10">
            <h1>Pendaftaran Mahasiswa</h1>
            <form action="{{url('proses-form')}}" method="GET">
            <table>
                <tr>
                    <td>
                        <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" id="npm" class="form-control" placeholder="NPM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                id="laki_laki" value="L">
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control form-control-sm" name="jurusan" id="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Ilmu Komputer">Ilmu Komputer</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Teknik Komunikasi">Teknik Komunikasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-primary">Tambah</button><br>
                            <a></a>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" id="npm" class="form-control" placeholder="NPM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                id="laki_laki" value="L">
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control form-control-sm" name="jurusan" id="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Ilmu Komputer">Ilmu Komputer</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Teknik Komunikasi">Teknik Komunikasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-primary">Tambah</button><br>
                            <a></a>
                        </div>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

@endsection
