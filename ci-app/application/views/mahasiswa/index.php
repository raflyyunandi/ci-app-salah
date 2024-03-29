
<div class="container">

<?php if($this->session->flashdata('flash')): ?>

<div class="row mt-3">
<div class="col-md-6">  
<div class="alert alert-success alert-dismissible fade show" role="alert">
Data mahasiswa <strong>Berhasil</strong> <?=$this->session->flashdata('flash');?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
</div>

<?php endif;?>

<div class="row mt-3">
<div class="col-md-6">
<a href="<?= base_url();?>mahasiswa/tambah" class="btn btn-outline-primary btn-lg">Tambah Data Mahasiswa</a>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<form action="" method="post">
<div class="input-group">
<input type="text" class="form-control" placeholder="Cari Mahasiswa ... " name="keyword">
<div class="input-group-append">
<button class="btn btn-outline-primary" type="submit" id="cari">Cari</button>
</div>
</div>
</form>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<h3>Daftar Mahasiswa</h3>
<?php if (empty($mahasiswa)) : ?>
<div class="alert alert-danger" role="alert">
Data Mahasiswa tidak ditemukan !
</div>
<?php endif; ?>
<ul class="list-group">
<?php foreach($mahasiswa as $mhs) : ?>
<li class="list-group-item"><?=$mhs['nama']?></<li>
<a href="<?=base_url()?>mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-pill badge-info float-right ml-1">Detail</a>
<a href="<?=base_url()?>mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-pill badge-success float-right ml-1">Ubah</a>
<a href="<?=base_url()?>mahasiswa/hapus/<?= $mhs['id'];?>" onclick="return confirm('Yakin Ingin Hapus?');" class="badge badge-pill badge-danger float-right ml-1">Hapus</a>
<?php endforeach;?>
</ul>
</div>
</div>

</div>