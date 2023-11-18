<?=$this->extend('templates/layout')?>

<?=$this->section('judul')?>
Dosen
<?=$this->endSection('judul')?>

<?=$this->section('subJudul')?>
Data Dosen
<?=$this->endSection('judul')?>

<?=$this->section('konten')?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NIDN</th>
      <th scope="col">Nama Dosen</th>
      <th scope="col">Mata Kuliah</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datadosen as $k){ ?>
    <tr>
      <th scope="row"><?=$k->NIDN ?></th>
      <td><?=$k->Nama?></td>
      <td><?=$k->MataKuliah?></td>
    </tr>
    <?php } ?>
</table>
<?=$this->endSection('konten')?>
