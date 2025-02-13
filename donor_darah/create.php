<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['tempat_tanggal_lahir'];
    $golongan_darah = $_POST['golongan_darah'];
    $nomor_hp = $_POST['nomor_hp'];

    $query = "INSERT INTO pendonor (nama, alamat, tempat_tanggal_lahir, golongan_darah, nomor_hp) 
              VALUES ('$nama', '$alamat', '$ttl', '$golongan_darah', '$nomor_hp')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: list_pendonor.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>