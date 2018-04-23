<?php
    $action = isset($data['id_admin']) ? 'update' : 'save';
    $id_admin = isset($data['id_admin']) ? $data['id_admin'] : '';
    $nama = isset($data['id_admin']) ? $data['nama'] : '';
    $username = isset($data['id_admin']) ? $data['username'] : '';
    $password = isset($data['id_admin']) ? $data['password'] : '';
    
    $readonly = isset($data['id_admin']) ? 'readonly' : '';
?>
<h3 align="center" style="border-bottom: 1px #00cc33 outset">FORM DATA ADMIN</h3>
<hr/>
<form enctype="multipart/form-data" data-toggle="validator" class="form" method="post"
      action="<?= site_url() ?>/admin/<?= $action ?>">
    <div class="form-group">
        <input required="" data-error="NIDN harus diisi" type="hidden" name="id_admin" class="form-control" value="<?= $id_admin ?>" <?= $readonly ?>/>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input required type="text" name="nama" class="form-control" value="<?= $nama ?>"/>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input required type="text" name="username" class="form-control" value="<?= $username ?>"/>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input required type="password" name="password" class="form-control" value="<?= $password ?>"/>
    </div>
   
    <button type="submit" class="btn btn-primary">
        Simpan Data 
    </button>
</form>