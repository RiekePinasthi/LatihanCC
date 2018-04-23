<?php
    $action = isset($data['kd_obat']) ? 'update' : 'save';
    $kd_obat = isset($data['kd_obat']) ? $data['kd_obat'] : '';
    $nama_obat = isset($data['kd_obat']) ? $data['nama_obat'] : '';
    $foto = isset($data['kd_obat']) ? $data['foto'] : '';
    $guna_obat = isset($data['kd_obat']) ? $data['guna_obat'] : '';
    
    $readonly = isset($data['kd_obat']) ? 'readonly' : '';
?>
<h3 align="center" style="border-bottom: 1px #00cc33 outset">FORM DATA OBAT</h3>
<hr/>
<form enctype="multipart/form-data" data-toggle="validator" class="form" method="post"
      action="<?= site_url() ?>/obat/<?= $action ?>">
    <div class="form-group">
        <input required="" data-error="Kode harus diisi" type="hidden" name="kd_obat" class="form-control" value="<?= $kd_obat ?>" <?= $readonly ?>/>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input required type="text" name="nama_obat" class="form-control" value="<?= $nama_obat ?>"/>
    </div>
     <div class="form-group">
        <label>Foto</label>
        <input required="" data-error="Foto harus diisi" type="file" name="foto" class="form-control" value=""/>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select name="id_kategori" class="form-control">
            <?php foreach ($kategori as $k):?>
            <option value="<?=$k['id_kategori']?>"><?=$k['nama_kategori']?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div>
        <label>Guna Obat</label>
        <input required type="text" name="guna_obat" class="form-control" value="<?= $guna_obat ?>"/>
    </div>
   
   
    <button type="submit" class="btn btn-primary">
        Simpan Data 
    </button>
</form>