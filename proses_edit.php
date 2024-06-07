<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Periksa apakah data yang diperlukan telah diterima dari formulir
if(isset($_POST['id']) && isset($_POST['kode_barang']) && isset($_POST['nama_barang']) && isset($_POST['jenis']) && isset($_POST['satuan']) && isset($_POST['merk_produsen']) && isset($_POST['harga_beli'])) {
    // Tangkap data dari formulir
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis = $_POST['jenis'];
    $satuan = $_POST['satuan'];
    $merk_produsen = $_POST['merk_produsen'];
    $harga_beli = $_POST['harga_beli'];

    // Lakukan query SQL untuk mengupdate data barang di database
    $query = "UPDATE barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', jenis='$jenis', satuan='$satuan', merk_produsen='$merk_produsen', harga_beli=$harga_beli WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dijalankan
    if($result) {
        // Redirect kembali ke halaman utama setelah mengedit data
        header("Location: index.php");
    } else {
        echo "Gagal mengedit data.";
    }
} else {
    echo "Data tidak lengkap.";
}
?>
