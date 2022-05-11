@extends('main')
@section('judul','Tambah Mahasiswa GSO23A')

@section('isi')
    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Tambah Mahasiswa GSO23A</h1>

    <form method="post" action='/prosestambahgso23a' enctype="multipart/form-data">
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Jenis Kelamin</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukan Jenis Kalamin" name="jenis_kelamin">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">Agama</label>
            <input class="form-control" id="nama" placeholder="Masukan Agama" name="agama">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" id="nama" placeholder="Masukan Email" name="email">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">Asal Sekolah</label>
            <input class="form-control" id="nama" placeholder="Masukan Asal Sekolah" name="asal_sekolah">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

    </div>
    </div>
    </div>
@endsection
