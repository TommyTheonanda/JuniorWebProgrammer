<?php
include 'koneksi.php';

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$satuan = $_POST['satuan'];
$merk_produsen = $_POST['merk_produsen'];
$harga_beli = $_POST['harga_beli'];

$query = "INSERT INTO barang (kode_barang, nama_barang, jenis, satuan, merk_produsen, harga_beli) 
          VALUES ('$kode_barang', '$nama_barang', '$jenis', '$satuan', '$merk_produsen', '$harga_beli')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
