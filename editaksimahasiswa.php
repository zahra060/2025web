<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggallahir = $_POST["tanggalLahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id = $_POST["id"];

$query = "UPDATE mahasiswa SET nama = '$nama',
tanggallahir ='$tanggallahir', telp = '$telp', email = 
'$email',id = '$id' WHERE nim = '$nim'" ;

mysqli_query($conn, $query);

header("location:index.php");
?>