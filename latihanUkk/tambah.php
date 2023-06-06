<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'praktekukk';

require "functions.php";

if(isset($_POST["submit"])) {
  $namabuku = $_POST["namabuku"];
  $pengarang = $_POST["pengarang"];
  $penerbit = $_POST["penerbit"];
  
  $query = "INSERT INTO buku
            VALUES  
            ('','$namabuku','$pengarang','$penerbit')
            ";
  mysqli_query($conn,$query);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container mt-3">
<h3>Tambah Data</h3>
<form method="POST" action="">
            <div class="mb-3">
                <label for="namabuku" class="form-label">Nama Buku</label>
                <input type="text" class="form-control" id="namabuku" name="namabuku" required>
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang Buku</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" required>
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
            <a href="admin.php" class="btn btn-primary">Kembali</a>
        </form>
</div>
</body>
</html>