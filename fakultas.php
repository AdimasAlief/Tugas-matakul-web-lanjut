<?php
// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "web_sekolah");

// Periksa koneksi
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas web lanjut</title>
</head>

<body>

<div>
    <div>
        <div>
            <h1>Data Fakultas</h1>
        </div>
        <div>

            <button type="button"><a href="tambahfak.php">Tambah Data</a></button>

            <table border="1" cellpadding="10" cellspacing="0">
                <tr align="center">
                    <th>kode fakultas</th>
                    <th>Nama fakultas</th>
                    <th>Aksi</th>
                </tr>

                <?php
                // Query untuk menampilkan data dari tabel 'data_mahasiswa'
                $tampil = mysqli_query($db, "SELECT * FROM fakultas ORDER BY kode_fakultas ASC");

                if ($tampil) {
                    while ($data = mysqli_fetch_array($tampil)) :
                ?>

                <tr align="center">
                    <td><?= $data['kode_fakultas'] ?></td>
                    <td><?= $data['nama_fakultas'] ?></td>
                    <td>
                        <a href="ubahfak.php?id=<?= $data['kode_fakultas'] ?>">Ubah</a> |
                        <a href="hapusfak.php?id=<?= $data['kode_fakultas'] ?>">Hapus</a>
                    </td>
                </tr>

                <?php 
                    endwhile;
                } else {
                    // Jika query gagal
                    echo "<tr><td colspan='3'>Data tidak ditemukan atau terjadi kesalahan query: " . mysqli_error($db) . "</td></tr>";
                }
                ?>
            </table>

        </div>
    </div>
</div>

</body>
</html>
