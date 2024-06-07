<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Periksa apakah parameter id sudah diterima dari URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Lakukan query SQL untuk menghapus data barang berdasarkan id
    $query = "DELETE FROM barang WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    
    if($result) {
        // Redirect kembali ke halaman utama setelah menghapus data
        header("Location: index.php");
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "ID barang tidak ditemukan.";
}
?>
