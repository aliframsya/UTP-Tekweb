<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi, "INSERT INTO produk 
(nama_produk, harga, kategori, stok, deskripsi) 
VALUES 
('$nama', '$harga', '$kategori', '$stok', '$deskripsi')");

header("location:index.php");
?>