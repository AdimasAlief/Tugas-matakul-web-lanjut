<?php
// Include file koneksi
include "db.php";

if (isset($_GET['id'])) {
    $kode_fakultas = $_GET['id'];
    // $kueri = "DELETE FROM fakultas WHERE kode_fakultas='$kode_fakultas'";
    $kueri = "DELETE FROM fakultas WHERE kode_fakultas='".$kode_fakultas."'";
    
    // var_dump(($kueri));
    // die();
    // Query untuk menghapus data berdasarkan NIM
    $delete = $conn->query($kueri   );
    // Jika penghapusan berhasil
    if ($delete) {
        header("Location: index.php?status=berhasil");
        exit();
    } else {
        // Penghapusan gagal
        header("Location: index.php?status=gagal");
        exit();
    }
} else {
    header("Location: index.php?status=tidak_ditemukan");
    exit();
}
?>
