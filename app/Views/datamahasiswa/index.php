<?=$this->extend('templates/layout')?>

<?=$this->section('judul')?>
Mahasiswa
<?=$this->endSection('judul')?>

<?=$this->section('subJudul')?>
Data Mahasiswa
<?=$this->endSection('judul')?>

<?=$this->section('konten')?>
<a href="datamahasiswa/add" class="btn btn-primary"><i class="fas fa-plus".></i>
Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Semester</th>
      <th scope="col">Dosen Pembimbing</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datamahasiswa as $k){ ?>
    <tr>
      <th scope="row"><?=$k->NIM ?></th>
      <td><?=$k->Nama?></td>
      <td><?=$k->Jenis_Kelamin?></td>
      <td><?=$k->Semester?></td>
      <td><?=$k->Dospem?></td>
      <td>
        <a href="<?=site_url("datamahasiswa/edit".$k->NIM)?>" 
        class="btn btn-xs btn-warning"><i class="fa fa-edit"></i>Update</a>
        <a href="<?=site_url("datamahasiswa/edit".$k->NIM)?>" 
        class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
      </td>
      
    </tr>
    <?php } ?>
</table>
<?=$this->endSection('konten')?>
