<div class="content-wrapper col-11">
<section class="content-header ml mt-2 auto">

<!-- <ol class=""> -->
<h2>
    Menu Data Gudang
    <div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data Gudang..." class="form-control" autocomplete="off">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            </div>
        </form>
    </div>
</div>
</h2>

  

</ol>
<div>

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Dosen <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Dosen <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<a href="<?= base_url('gudang/tambah');?>" class="btn btn-info">Tambah Data</a>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
    <td>No</td>
    <td class="center">Nama</td>
    <td class="center">Lokasi</td>
    <td class="center">Alamat</td>
    <td class="center">Aksi</td>
</tr>
</thead>
<tbody>
<tr>
    <?php $i=1;?>
    <?php foreach ($gudang as $dsn) :?>
    <td><?=$i;?></td>
    <td><?=$dsn['nama'];?></td>    
    <td><?=$dsn['lokasi'];?></td>    
    <td><?=$dsn['alamat'];?></td>         
    <td>
        <a href="<?=base_url();?>dosen/hapus/<?=$dsn['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus');">Hapus</a>
        <a href="<?=base_url();?>dosen/edit/<?=$dsn['id'];?>" class="btn btn-info">Edit</a>
    </td>
</tr>
<?php $i++;?>
    <?php endforeach;?>
</tbody>
</table>
    </div>
</div>