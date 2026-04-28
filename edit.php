<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">👓 Optik</span>
    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">

            <h3 class="mb-4 fw-bold">Edit Produk</h3>

            <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $d['id']; ?>">

                <div class="row">

                    <!-- Nama -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" 
                               value="<?= $d['nama_produk']; ?>" required>
                    </div>

                    <!-- Harga -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" 
                               value="<?= $d['harga']; ?>" required>
                    </div>

                    <!-- Kategori -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control"
                        value="<?= $d['kategori']; ?>" placeholder=>
                    </div>

                    <!-- Stok -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" name="stok" class="form-control" 
                               value="<?= $d['stok']; ?>">
                    </div>

                    <!-- Deskripsi -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4"><?= $d['deskripsi']; ?></textarea>
                    </div>

                </div>

                <div class="d-flex justify-content-end mt-4">
                    <a href="index.php" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn" style="background-color: #ffb300; color: black;">
                     Update</button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>