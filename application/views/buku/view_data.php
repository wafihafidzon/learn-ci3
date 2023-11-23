<a href="<?= base_url('buku/tambah'); ?>">Tambah Buku Baru</a>

<table border="1">
    <tr>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Pengarang</th>
        <th>Ubah</th>
        <th>Hapus</th>
    </tr>
    <?php foreach ($buku as $row) : ?>
        <tr>
            <td><?= $row->judul; ?></td>
            <td><?= $row->penerbit; ?></td>
            <td><?= $row->pengarang; ?></td>
            <td><a href="<?= site_url('buku/get_edit/' . $row->id); ?>">Ubah</a></td>
            <td><a href="<?= site_url('buku/hapus/' . $row->id); ?>">Hapus</a></td>
        </tr>
    <?php endforeach; ?>
</table>
