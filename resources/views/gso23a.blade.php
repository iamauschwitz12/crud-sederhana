@extends('main')
@section('judul','Kelas GSO23A')

@section('isi')
    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Daftar Mahasiswa</h1>

    <a href="/tambah_gso23a" class="btn btn-success my-2">Tambah Mahasiswa</a>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($gso23a as $swa)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$swa->nama}}</td>
              <td>{{$swa->jenis_kelamin}}</td>
              <td>{{$swa->agama}}</td>
              <td>{{$swa->email}}</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form class="" action="/gso23a/{{ $swa->id }}" method="post">
                     @method('delete')
                     @csrf
                     <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                     <a href="/editgso23a/{{$swa->id}}" class="btn btn-warning">Edit</a>
                   </form>
                </div>
              </td>
            </tr>
        @endforeach
        </tbody>
      </table>

</div>
</div>
</div>
@endsection
