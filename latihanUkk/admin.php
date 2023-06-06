<?php 
require 'functions.php';      //mengambil data dari file function

$data_buku = query("SELECT * FROM buku");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Control PerpusKom| Perpustakaan Telkom</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mt-4">
      <h1 class="mb-4">Daftar Siswa</h1>
      <a href="tambah.php" class="btn btn-sm btn-primary">Tambah Data</a>
      <a href="index.html" class="btn btn-sm btn-primary">Kembali Ke Halaman Awal</a>

      <table class="table mt-4">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($data_buku as $row): ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $row["namabuku"];?></td>
              <td><?= $row["pengarang"];?></td>
              <td><?= $row["penerbit"];?></td>
              <td>
                <a href="hapus.php?id=<?= $row["id"];?>">Hapus</a> |
                <a href="">Edit</a>
              </td>
            </tr>
            <?php $no++ ?>
            <?php endforeach ?>

        </tbody>
      </table>
    </div>
  </body>
</html>
