<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Optik Kacamata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #f4f6f9;">

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <span class="navbar-brand">👓 Optik</span>
  </div>
</nav>

<div class="container mt-4">
    <h2 class="text-center">Optik Kacamata 👓</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Produk</a>

    <div class="row">
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM produk");
        while($d = mysqli_fetch_array($data)){
        ?>
        <div class="col-md-4">
            <div class="card mb-3 p-3">
                <h5><?php echo $d['nama_produk']; ?></h5>
                <p>Rp <?php echo number_format($d['harga']); ?></p>
                <p>Kategori: <?php echo $d['kategori']; ?></p>
                <p>Stok: <?php echo $d['stok']; ?></p>
                <p><?php echo $d['deskripsi']; ?></p>

                <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

</body>
</html>