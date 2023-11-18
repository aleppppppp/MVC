<?=$this->extend('templates/layout')?>

<?=$this->section('judul')?>
Mahasiswa
<?=$this->endSection('judul')?>

<?=$this->section('subJudul')?>
Form Mahasiswa
<?=$this->endSection('subJudul')?>

<?=$this->section('konten')?>
<?php if(isset($validation)) { ?>
    <div class="alert alert-danger" role="alert">
        <?=$validation->listErrors()?>
    </div>
<?php } ?>

<form action="<?=site_url('datamahasiswa/create')?>" method="post" autocomplete="off">
    <?= csrf_field() ?>
    <div class="card-body col-md-8">
        <div class="form-group">
            <label for="NIM">NIM</label>
            <input type="text" class="form-control" name="NIM" id="NIM" value="<?= old('NIM') ?>">
        </div>
        <div class="form-group">
            <label for="Nama">Nama Mahasiswa</label>
            <input type="text" name="Nama" id="Nama" class="form-control" value="<?= old('Nama') ?>">
        </div>
        <div class="form-group">
            <label for="Jenis_Kelamin">Jenis Kelamin</label>
            <select name="Jenis_Kelamin" id="Jenis_Kelamin" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Semester">Semester</label>
            <input type="text" name="Semester" id="Semester" class="form-control" value="<?= old('Semester') ?>">
        </div>
        <div class="form-group">
            <label for="Dospem">Dosen Pembimbing</label>
            <input type="text" name="Dospem" id="Dospem" class="form-control" value="<?= old('Dospem') ?>">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>
</form>
<?=$this->endSection('konten')?>
