<?=$this->extend('templates/layout')?>

<?=$this->section('judul')?>
Pembayaran Mahasiswa
<?=$this->endSection('judul')?>

<?=$this->section('subJudul')?>
Data Pembayaran Mahasiswa
<?=$this->endSection('judul')?>

<?=$this->section('konten')?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Pembayaran</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">UKT</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datapembayaran as $k){ ?>
    <tr>
      <th scope="row"><?=$k->ID_Pembayaran ?></th>
      <td><?=$k->NIM?></td>
      <td><?=$k->Nama_Mhs?></td>
      <td><?=$k->UKT?></td>
      <td><?=$k->Status?></td>
    </tr>
    <?php } ?>
</table>
<?=$this->endSection('konten')?>
