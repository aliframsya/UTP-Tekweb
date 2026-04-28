<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Tambah Produk</h2>

    <form action="proses_tambah.php" method="POST">
        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama Produk" required>
        <input type="number" name="harga" class="form-control mb-2" placeholder="Harga" required>
        <input type="text" name="kategori" class="form-control mb-2" placeholder="Kategori" required>
        <input type="number" name="stok" class="form-control mb-2" placeholder="Stok" required>
        <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi"></textarea>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>

</body>
</html>