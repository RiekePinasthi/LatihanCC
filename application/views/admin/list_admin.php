<h3 align="center">DATA ADMIN</h3>
<a href="<?= site_url() ?>/admin/form" class="btn btn-primary">Tambah Data</a>
<table class="table table-striped">

    <thead>
        <tr class="info">
            <th>Nama</th>
            <th>Username</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($admin as $r) { ?>
        <tr>
            <td><?= $r['nama'] ?></td>
            <td><?= $r['username'] ?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?= site_url() ?>/admin/edit/<?= $r['id_admin']?>">
                    <span class="glyphicon glyphicon-edit"></span>Ubah
                </a>
                 <a class="btn btn-primary btn-sm del" href="#" rel="<?= site_url() ?>/admin/del/<?= $r['id_admin']?>">
                    <span class="glyphicon glyphicon-trash"></span>Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>