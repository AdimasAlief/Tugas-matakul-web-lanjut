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
        <h3>PHP MySQL</h3>
    </div>

    <div>
        <div>
            <h4>Data Mahasiswa</h4>
        </div>
        <div>

            <button type="button"><a href="tambah.php">Tambah Data</a></button>

            <table>
                <tr>
                    <th>id</th>
                    <th>nim</th>
                    <th>nama</th>
                    <th>kode_prodi</th>
                    <th>status_aktivitas</th>
                </tr>

                <?php
                // Query untuk menampilkan data dari tabel 'data_mahasiswa'
                $tampil = mysqli_query($db, "SELECT * FROM mahasiswa ORDER BY id ASC");

                if ($tampil) {
                    while ($data = mysqli_fetch_array($tampil)) :
                ?>

                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['kode_prodi'] ?></td>
                    <td><?= $data['status_aktivitas'] ?></td>
                    <!-- <td>
                        <a href="ubah.php?id=<?= $data['NIM'] ?>">Ubah</a>
                        <a href="hapus.php?id=<?= $data['NIM'] ?>">Hapus</a>
                    </td> -->
                </tr>

                <?php 
                    endwhile;
                } else {
                    // Jika query gagal
                    echo "<tr><td colspan='5'>Data tidak ditemukan atau terjadi kesalahan query: " . mysqli_error($db) . "</td></tr>";
                }
                ?>
            </table>

        </div>
    </div>
</div>

</body>
</html>
