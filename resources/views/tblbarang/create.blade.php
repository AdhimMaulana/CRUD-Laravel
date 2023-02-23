<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white fst-italic fw-bold">Tambah Data</a>
    <form class="d-flex">
      <a href="/barang" class="btn btn-success me-2">Kembali</a>
    </form>
  </div>
</nav>
  <div class="container mt-5 bg-dark rounded-3">
<div class="card-body">
<form action="/store" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Nama Barang</label>
    <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Deskripsi Barang</label>
    <input type="text" name="deskripsibarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Harga</label>
    <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary mb-3 ">Konfirmasi</button>
</form>

</div>
</div>
<footer class="bg-dark text-center text-white  fst-italic mt-5">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright :
    <a class="text-white text-decoration-none fst-italic" >@AdhimMaulana08</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>