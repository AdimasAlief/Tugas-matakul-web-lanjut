
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas web lanjut</title>
</head>

<!-- Tambah Data -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data fakultas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="aksi_crud_fak.php">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">kode_fakultas</label>
                        <input type="text" class="form-control" name="tkode_fakultas" placeholder="Masukan kode fakkultas">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">nama_fakultas</label>
                        <input type="text" class="form-control" name="tnama_fakultas" placeholder="Masukan nama fakultas">
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Akhir Tambah Data -->

</body>
</html>