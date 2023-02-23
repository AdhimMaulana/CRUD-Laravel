
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white fst-italic fw-bold">Tabel Data</a>
    <form class="d-flex">
      <input class="form-control me-2" type="Search" placeholder="Cari" aria-label="Search">
      <button class="btn btn-success me-2" type="submit">Cari</button>
      <a href="/create" class="btn btn-success me-2">Tambah</a>
      <a href="/login" class="btn btn-success me-2">LogOut</a>
    </form>
  </div>
</nav>
<table class="table table-striped table-dark mt-3" style="width: ;">
<thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Deskripsi Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Lainnya</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach($data as $row)
    <tr>
    <th scope="row">#</th>
      <td>{{ $row->namabarang }}</td>
      <td>{{ $row->deskripsibarang }}</td>
      <td>{{ $row->harga }}</td>
      <td>
        <a href="/edit/{{ $row->id }}" class="btn btn-success mb-2">Edit</a>
        <a href="/hapus/{{ $row->id }}" class="btn btn-success mb-2">Hapus</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<footer class="bg-dark text-center text-white  fst-italic">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright :
    <a class="text-white text-decoration-none fst-italic" >@AdhimMaulana08</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</div>
</div>
</html>