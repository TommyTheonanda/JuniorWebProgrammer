<?php
// Lakukan koneksi ke database
include 'koneksi.php';

// Periksa apakah parameter id sudah diterima dari URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus</title>
    <script>
        function konfirmasiHapus() {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");
            if(konfirmasi) {
                window.location.href = "proses_hapus.php?id=<?php echo $id; ?>";
            } else {
                window.location.href = "index.php";
            }
        }
    </script>
</head>
<body onload="konfirmasiHapus()">
</body>
</html>
<?php
} else {
    echo "ID barang tidak ditemukan.";
}
?>
