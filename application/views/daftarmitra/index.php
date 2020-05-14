<div class="content-wrapper col-11">
<section class="content-header ml mt-2 auto">

<!-- <ol class=""> -->
<h2>
    Menu Daftar Mitra
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
    <td class="center">Kategori</td>
    <td class="center">Alamat</td>
    <td class="center">Lead</td>
    <td class="center">Aksi</td>
</tr>
</thead>
<tbody>
<tr>
    <?php $i=1;?>
    <?php foreach ($daftarmitra as $dft) :?>
    <td><?=$i;?></td>
    <td><?=$dft['nama'];?></td>    
    <td><?=$dft['kategori'];?></td>    
    <td><?=$dft['alamat'];?></td>
    <td><?=$dft['lead'];?></td>
    <td>
        <a href="<?=base_url();?>dosen/hapus/<?=$dft['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus');">Hapus</a>
        <a href="<?=base_url();?>dosen/edit/<?=$dft['id'];?>" class="btn btn-info">Edit</a>
    </td>
</tr>
<?php $i++;?>
    <?php endforeach;?>
</tbody>
</table>
    </div>
</div>