<?php
    $action = isset($data['id_kategori']) ? 'update' : 'save';
    $id_kategori = isset($data['id_kategori']) ? $data['id_kategori'] : '';
    $nama_kategori = isset($data['id_kategori']) ? $data['nama_kategori'] : '';
    $id_admin = isset($data['id_kategori']) ? $data['id_admin'] : '';
    
    $readonly = isset($data['id_kategori']) ? 'readonly' : '';
?>
<h3 align="center" style="border-bottom: 1px #00cc33 outset">FORM DATA KATEGORI OBAT</h3>
<hr/>
<form enctype="multipart/form-data" data-toggle="validator" class="form" method="post"
      action="<?= site_url() ?>/kategori/<?= $action ?>">
    <div class="form-group">
        <input required="" data-error="ID harus diisi" type="hidden" name="id_kategori" class="form-control" value="<?= $id_kategori ?>" <?= $readonly ?>/>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label>Kategori Obat</label>
        <input required type="text" name="nama_kategori" class="form-control" value="<?= $nama_kategori ?>"/>
    </div>
   
    <button type="submit" class="btn btn-primary">
        Simpan Data 
    </button>
</form>