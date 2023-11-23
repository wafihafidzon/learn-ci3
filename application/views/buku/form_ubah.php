<h2>Ubah Data Buku</h2>

<form action="<?= site_url('buku/update'); ?>" method="post">
    <input type="hidden" name="idbuku" value="<?= $idbuku; ?>">

    <label for="judul">Judul:</label>
    <input type="text" name="judul" value="<?= $judul; ?>" required><br>

    <label for="penerbit">Penerbit:</label>
    <input type="text" name="penerbit" value="<?= $penerbit; ?>" required><br>

    <label for="pengarang">Pengarang:</label>
    <input type="text" name="pengarang" value="<?= $pengarang; ?>" required><br>

    <input type="submit" value="Simpan">
</form>