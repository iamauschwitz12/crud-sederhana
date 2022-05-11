<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<style type="text/css">
	body {
    background: #eee
}

.name {
    color: blue
}

.work {
    font-weight: bold;
    font-size: 15px
}

.about span {
    font-size: 13px
}

.v-profile {
    color: blue;
    cursor: pointer
}

.box {
    -webkit-box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72);
    -moz-box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72);
    box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72)
}

.col-md-3 {
    margin-top: 10px
}

</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MI.Code</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" aria-label="Basic mixed styles example">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kelas Gso23A</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kelas Gso24A</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kelas Gso25A</a>
        </li>
      </ul>
    </div>
    <div aria-label="Basic mixed styles example">
	  <a href="/masuk" class="btn btn-warning">Login</a>
	  <a href="" class="btn btn-success">Register</a>
	</div>
  </div>
</nav>
<div class="container text-center mt-5 mb-2">
    <h1 class="mb-0">Daftar Siswa/Siswi Kelas Gso23a</h1>
    <span style="font-weight: bold;">
    	Tahun angkatan 2022
    </span>
</div>
<div class="container mt-3" style="
display: grid;
grid-template-columns: auto auto auto;
margin-right: 80px;
">
	@foreach ($gso23a as $swa)
    <div class="row">
        <div class="col-md-10">
            <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="/image/{{ $swa->image }}" width="90" height="90">
                <h5 class="mt-3 name">{{$swa->nama}}</h5><span class="work d-block">{{$swa->jenis_kelamin}}</span><span class="work d-block">{{$swa->agama}}</span>
                <div class="mt-4 about"><span>{{$swa->email}}</span></div>
                <div class="mt-4">
									<a href="/masuk" class="v-profile" style="text-decoration: none; font-weight: bold;">View Profile</a>
                </div>
            </div>
						<br>
        </div>
    </div>
		@endforeach
</div>
<div style="margin-left:150px;">
	{{$gso23a->links()}}
</div>
</body>
</html>
