<?php
require 'functions.php';
$laporan_cetak = mysqli_query($konek,"SELECT * FROM tb_sewa");
?>
<style>
@media print {
  .btnmenu {
    display: none;
  }
  .sidebar {
    display: none;
  }
}
</style>
<table class="table table-hover">
  <thead>
    <tr>
    <th>NO</th>
    <th>NAMA TIM</th>
    <th>NAMA LAPANGAN</th>
    <th>TANGGAL</th>
    <th>STATUS</th>
    </tr>
  </thead>
<tbody>
  <tr>
  <?php $i = 1; ?>
  <?php foreach( $laporan_cetak as $row) : ?>
    <td><?= $i; ?></td>
    <td><?=$row['nama_tim'];?></td>
    <td><?=$row['lapangan'];?></td>
    <td><?=$row['tanggal_sewa'];?></td>
    <td><?="LUNAS";?></td>
  </tr>
  <?php $i++; ?>
  <?php endforeach; ?>
</tbody>
</table>
<center>-------------------- Angkasa Futsal Stadium ------------------- </center>
<center>-------------------- Terima Kasih ------------------- </center>
<br><br><br>
<u>Pegawai Angkasa - Futsal Stadium</u>
<br>
<small class="tanggal">dicetak pada tanggal <?=date("d M Y");?></small>
<script>
window.print();
</script>