<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggallahir = $_POST["tanggalLahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id = $_POST["id"];

$query = "INSERT INTO mahasiswa (nim, nama, tanggallahir, telp, email,id) VALUES
 ('$nim', '$nama', '$tanggallahir', '$telp', '$email', '$id')";

mysqli_query($conn, $query);

header("location:index.php");
?>