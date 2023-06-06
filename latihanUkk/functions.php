<?php 
// KONEKSI KE DATABASE
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'praktekukk';

$conn = mysqli_connect($host,$username,$password,$database);


//membuat function query 
function query($query) {
  global $conn;       //fungsi global untuk mengambil varibel diluar dari function
  $result = mysqli_query($conn,$query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function hapus ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM buku WHERE id = $id");

  return mysqli_affected_rows($conn);
}


?>