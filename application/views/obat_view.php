<?php foreach ($obat  as $b): ?>
<h3><?=$b->nama_obat?></h3>
<br>
<p>Tanggal:<?=$b->tanggal?> </p>
<p>Pukul:<?=$b->pukul?> </p>
<br>
<img src="<?= base_url() ?>foto /<?=$b->foto?>"width="200" />
<?=$b->guna_obat?>
<?php endforeach; ?>
 