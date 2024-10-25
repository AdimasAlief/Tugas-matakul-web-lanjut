<?php
// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "web_sekolah");

if (isset($_POST['bsimpan'])) {

    $kode_fakultas = $_POST['tkode_fakultas'];
    $nama_fakultas = $_POST['tnama_fakultas'];
    
    // Query untuk memasukkan data ke dalam database
    $query = "INSERT INTO fakultas (kode_fakultas, nama_fakultas) VALUES ('$kode_fakultas', '$nama_fakultas')";

    // Eksekusi query
    if (mysqli_query($db, $query)) {
        // Jika berhasil
        header("Location: index.php");
    } else {
        // Jika terjadi kesalahan
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
}

mysqli_close($db);
?>
