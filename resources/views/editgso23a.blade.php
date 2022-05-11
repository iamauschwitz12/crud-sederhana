@extends('main')
@section('judul','Edit Mahasiswa GSO23A')

@section('isi')
    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Edit Mahasiswa GSO23A</h1>

    <form method="post" action='/editgso23a/{{$gso23a->id}}' enctype="multipart/form-data">
            @method('patch')
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{ $gso23a->nama }}">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Jenis Kelamin</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukan Jenis Kalamin" value="{{ $gso23a->jenis_kelamin }}" name="jenis_kelamin">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">Agama</label>
            <input class="form-control" id="nama" placeholder="Masukan Agama" name="agama" value="{{ $gso23a->agama }}">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" id="nama" placeholder="Masukan Email" name="email" value="{{ $gso23a->email }}">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">Asal Sekolah</label>
            <input class="form-control" id="nama" placeholder="Masukan Asal Sekolah" name="asal_sekolah" value="{{ $gso23a->asal_sekolah }}">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="">
            <img src="/image/{{ $gso23a->image }}" alt=""  width="90" height="90">
          </div>
          <br>
          <button type="submit" class="btn btn-danger">Edit Mahasiswa</button>
    </form>

    </div>
    </div>
    </div>
@endsection
