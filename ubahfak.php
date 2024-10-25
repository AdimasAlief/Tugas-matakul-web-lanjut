<?php
// Include file koneksi
include "db.php";

if (isset($_GET['id'])) {
    $NIM_lama = $_GET['id']; // NIM lama dari URL

   
    $query = mysqli_query($conn, "SELECT * FROM fakultas WHERE kode_fakultas = '$NIM_lama'");
    $data = mysqli_fetch_array($query);
}


if (isset($_POST['bubah'])) {

    // Data dari form
    $kode_fakultas_baru = $_POST['kode_fakultas'];
    $nama_fakultas_baru = $_POST['tnama_fakultas'];
    
    // Query untuk update data
    $update = mysqli_query($conn, "UPDATE fakultas SET
                kode_fakultas = '$kode_fakultas_baru',
                nama_fakultas = '$nama_fakultas_baru'
                WHERE kode_fakultas = '$NIM_lama'"); // Gunakan NIM lama di WHERE

    // Jika update berhasil
    if ($update) {
        header("Location: index.php?status=berhasil");
        exit();
    } else {
        // Jika update gagal
        header("Location: index.php?status=gagal");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data_mahasiswa</title>
</head>

<body>

    <div class="container mt-5">
        <h3 class="text-center">Form Ubah data_mahasiswa</h3>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">kode_fakultas</label>
                <input type="text" class="form-control" name="kode_fakultas" value="<?= isset($data['kode_fakultas']) ? $data['kode_fakultas'] : '' ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">nama_fakultas</label>
                <input type="text" class="form-control" name="tnama_fakultas" value="<?= isset($data['nama_fakultas']) ? $data['nama_fakultas'] : '' ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" name="bubah">Ubah Data</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</body>

</html>
