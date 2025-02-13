<?php
include 'config.php';
$search = isset($_GET['search']) ? $_GET['search'] : "";
$query = "SELECT *, YEAR(CURDATE()) - YEAR(tempat_tanggal_lahir) AS usia FROM pendonor 
          WHERE nama LIKE '%$search%' OR golongan_darah LIKE '%$search%'";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pendonor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>List Pendonor PMI Kota Semarang</h2>
    <form action="list_pendonor.php" method="GET">
        <input type="text" name="search" placeholder="Cari berdasarkan nama atau golongan darah">
        <button type="submit">Cari</button>
    </form>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>TTL</th>
            <th>Golongan Darah</th>
            <th>Usia</th>
            <th>Nomor HP</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['tempat_tanggal_lahir'] ?></td>
                <td><?= $row['golongan_darah'] ?></td>
                <td><?= $row['usia'] ?> Tahun</td>
                <td><?= $row['nomor_hp'] ?></td>
                <td>
                <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
            </tr>
        <?php } ?>
    </table>
    <!-- Tombol Tambah Data -->
    <div class="tombol-container">
        <a href="index.html" class="btn-tambah">+ Tambah Data</a>
    </div>
</body>
</html>