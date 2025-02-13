<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? $_POST['id'] : null; // Cek apakah ID ada (untuk update)
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $golongan_darah = $_POST['golongan_darah'];
    $nomor_hp = $_POST['nomor_hp'];

    if ($id) {
        // Jika ada ID, maka UPDATE data
        $query = "UPDATE pendonor SET 
                    nama='$nama', 
                    alamat='$alamat', 
                    tempat_tanggal_lahir='$tempat_tanggal_lahir', 
                    golongan_darah='$golongan_darah', 
                    nomor_hp='$nomor_hp' 
                  WHERE id='$id'";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Data berhasil diperbarui!'); window.location.href='list_pendonor.php';</script>";
        } else {
            echo "Error saat mengupdate data: " . mysqli_error($conn);
        }
    } else {
        // Jika tidak ada ID, maka INSERT data baru
        $query = "INSERT INTO pendonor (nama, alamat, tempat_tanggal_lahir, golongan_darah, nomor_hp) 
                  VALUES ('$nama', '$alamat', '$tempat_tanggal_lahir', '$golongan_darah', '$nomor_hp')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Pendaftaran berhasil!'); window.location.href='list_pendonor.php';</script>";
        } else {
            echo "Error saat menambahkan data: " . mysqli_error($conn);
        }
    }
}
?>
