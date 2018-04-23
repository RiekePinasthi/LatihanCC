<h3 align="center">DATA OBAT HERBAL</h3>
<a href="<?= site_url() ?>/obat/form" class="btn btn-primary">Tambah Data</a>
<table class="table table-striped">

    <thead>
        <tr class="info">
            <th>Nama</th>
            
            <th>Kategori</th>
            
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($obat as $r) { ?>
        <tr>
            <td><?= $r['nama_obat'] ?></td>
             
            <td><?= $r['nama_kategori'] ?></td>
            
            <td>
                <a class="btn btn-primary btn-sm" href="<?= site_url() ?>/obat/edit/<?= $r['kd_obat']?>">
                    <span class="glyphicon glyphicon-edit"></span>Ubah
                </a>
                 <a class="btn btn-primary btn-sm del" href="<?= site_url() ?>/obat/del/<?= $r['kd_obat']?>">
                    <span class="glyphicon glyphicon-trash"></span>Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
