<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Barang</h2>
        <a href="tambah_barang.php" class="btn tambah">Tambah Barang</a>
        <form action="index.php" method="GET" class="search-form">
            <input type="text" name="keyword" placeholder="Cari Barang...">
            <button type="submit" class="btn search">Cari</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis</th>
                    <th>Satuan</th>
                    <th>Merk Produsen</th>
                    <th>Harga Beli</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Koneksi ke database
                include 'koneksi.php';

                // Query untuk menampilkan data
                $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
                $query = "SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%'";
                $result = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['kode_barang'] . "</td>";
                    echo "<td>" . $row['nama_barang'] . "</td>";
                    echo "<td>" . $row['jenis'] . "</td>";
                    echo "<td>" . $row['satuan'] . "</td>";
                    echo "<td>" . $row['merk_produsen'] . "</td>";
                    echo "<td>" . $row['harga_beli'] . "</td>";
                    echo "<td>
                            <a href='edit_barang.php?id=" . $row['id'] . "' class='btn edit'>Edit</a>
                            <a href='hapus_barang.php?id=" . $row['id'] . "' class='btn hapus'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
