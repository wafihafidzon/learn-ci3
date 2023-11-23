<h2>Tambah Buku Baru</h2>

    <form action="<?= site_url('buku/insert'); ?>" method="post">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" required><br>

        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" required><br>

        <label for="pengarang">Pengarang:</label>
        <input type="text" name="pengarang" required><br>

        <input type="submit" value="Simpan">
    </form>