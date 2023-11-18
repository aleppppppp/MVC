<?=$this->extend('templates/layout')?>

<?=$this->section('judul')?>
Kelas
<?=$this->endSection('judul')?>

<?=$this->section('subJudul')?>
Data Mahasiswa
<?=$this->endSection('judul')?>

<?=$this->section('konten')?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Kelas</th>
      <th scope="col">Ruang</th>
      <th scope="col">Kapasitas</th>
      <th scope="col">Fasilitas</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datakelas as $k){ ?>
    <tr>
      <th scope="row"><?=$k->IDKelas ?></th>
      <td><?=$k->RuangKelas?></td>
      <td><?=$k->Kapasitas?></td>
      <td><?=$k->Fasilitas?></td>
      <td><?=$k->Status?></td>
    </tr>
    <?php } ?>
</table>
<?=$this->endSection('konten')?>
