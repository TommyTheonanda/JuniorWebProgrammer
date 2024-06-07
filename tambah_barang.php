<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Barang</h2>
        <form action="proses_tambah.php" method="POST">
            <input type="text" name="kode_barang" placeholder="Kode Barang" required>
            <input type="text" name="nama_barang" placeholder="Nama Barang" required>
            <input type="text" name="jenis" placeholder="Jenis" required>
            <input type="text" name="satuan" placeholder="Satuan" required>
            <input type="text" name="merk_produsen" placeholder="Merk Produsen" required>
            <input type="number" name="harga_beli" placeholder="Harga Beli" required>
            <button type="submit" class="btn">Simpan</button>
            <a href="index.php" class="btn">Kembali</a>
        </form>
    </div>
</body>
</html>
