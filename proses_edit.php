<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi,"UPDATE produk SET
nama_produk='$nama',
harga='$harga',
kategori='$kategori',
stok='$stok',
deskripsi='$deskripsi'
WHERE id='$id'");

header("location:index.php");
?>