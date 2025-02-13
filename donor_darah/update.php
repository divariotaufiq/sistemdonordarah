<?php
include 'config.php';

// Jika ada ID di URL, berarti mode edit
$id = isset($_GET['id']) ? $_GET['id'] : null;
$nama = $alamat = $tempat_tanggal_lahir = $golongan_darah = $nomor_hp = '';

if ($id) {
    $sql = "SELECT * FROM pendonor WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if ($data) {
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tempat_tanggal_lahir = $data['tempat_tanggal_lahir'];
        $golongan_darah = $data['golongan_darah'];
        $nomor_hp = $data['nomor_hp'];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $id ? 'Edit' : 'Tambah'; ?> Pendonor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><?php echo $id ? 'Edit' : 'Tambah'; ?> Data Pendonor</h2>
    <form action="process_pendonor.php" method="post">
        <?php if ($id): ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <?php endif; ?>

        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>

        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $alamat; ?>" required>

        <label>Tempat & Tanggal Lahir:</label>
        <input type="text" name="tempat_tanggal_lahir" value="<?php echo $tempat_tanggal_lahir; ?>" required>

        <label>Golongan Darah:</label>
        <select name="golongan_darah" required>
            <option value="A" <?php if ($golongan_darah == 'A') echo 'selected'; ?>>A</option>
            <option value="B" <?php if ($golongan_darah == 'B') echo 'selected'; ?>>B</option>
            <option value="AB" <?php if ($golongan_darah == 'AB') echo 'selected'; ?>>AB</option>
            <option value="O" <?php if ($golongan_darah == 'O') echo 'selected'; ?>>O</option>
        </select>

        <label>Nomor HP:</label>
        <input type="text" name="nomor_hp" value="<?php echo $nomor_hp; ?>" required>

        <button type="submit"><?php echo $id ? 'Update' : 'Tambah'; ?></button>
    </form>
</body>
</html>
