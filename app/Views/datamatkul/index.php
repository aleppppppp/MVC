<?=$this->extend('templates/layout')?>

<?=$this->section('judul')?>
Mata Kuliah
<?=$this->endSection('judul')?>

<?=$this->section('subJudul')?>
Data Mata Kuliah
<?=$this->endSection('judul')?>

<?=$this->section('konten')?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Mata Kuliah</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Kuota</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datamatkul as $k){ ?>
    <tr>
      <th scope="row"><?=$k->IDMatkul ?></th>
      <td><?=$k->NamaMatkul?></td>
      <td><?=$k->Kuota?></td>
    </tr>
    <?php } ?>
</table>
<?=$this->endSection('konten')?>
