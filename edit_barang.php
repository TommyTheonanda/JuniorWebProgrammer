<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Periksa apakah parameter id sudah diterima dari URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Lakukan query SQL untuk mendapatkan data barang berdasarkan id
    $query = "SELECT * FROM barang WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    
    // Periksa apakah data barang ditemukan
    if(mysqli_num_rows($result) > 0) {
        $barang = mysqli_fetch_assoc($result);
    } else {
        echo "Data barang tidak ditemukan.";
        exit();
    }
} else {
    echo "ID barang tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Barang</h2>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $barang['id']; ?>">
            <input type="text" name="kode_barang" value="<?php echo $barang['kode_barang']; ?>" required>
            <input type="text" name="nama_barang" value="<?php echo $barang['nama_barang']; ?>" required>
            <input type="text" name="jenis" value="<?php echo $barang['jenis']; ?>" required>
            <input type="text" name="satuan" value="<?php echo $barang['satuan']; ?>" required>
            <input type="text" name="merk_produsen" value="<?php echo $barang['merk_produsen']; ?>" required>
            <input type="number" name="harga_beli" value="<?php echo $barang['harga_beli']; ?>" required>
            <button type="submit" class="btn">Simpan</button>
            <a href="index.php" class="btn">Kembali</a>
        </form>
    </div>
</body>
</html>
