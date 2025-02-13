<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $golongan_darah = $_POST['golongan_darah'];
    $nomor_hp = $_POST['nomor_hp'];

    $query = "INSERT INTO pendonor (nama, alamat, tempat_tanggal_lahir, golongan_darah, nomor_hp) 
              VALUES ('$nama', '$alamat', '$tempat_tanggal_lahir', '$golongan_darah', '$nomor_hp')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Pendaftaran berhasil!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>