<h3 align="center">DATA KATEGORI</h3>
<a href="<?= site_url() ?>/kategori/form" class="btn btn-primary">Tambah Data</a>
<table class="table table-striped">

    <thead>
        <tr class="info">
            <th>Id Kategori</th>
            <th>Nama Kategori</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kategori as $r) { ?>
        <tr>
            <td><?= $r['id_kategori'] ?></td>
            <td><?= $r['nama_kategori'] ?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?= site_url() ?>/kategori/edit/<?= $r['id_kategori']?>">
                    <span class="glyphicon glyphicon-edit"></span>Ubah
                </a>
                 <a class="btn btn-primary btn-sm del" href="#" rel="<?= site_url() ?>/kategori/del/<?= $r['id_kategori']?>">
                    <span class="glyphicon glyphicon-trash"></span>Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>