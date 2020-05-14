<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!-- <ol class=""> -->
<h2>
    Menu Data Kategori
</div>
</h2>

  

</ol>
<div>

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Karyawan <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<a href="<?= base_url('karyawan/tambah');?>" class="btn btn-info ml-2">Tambah Data</a>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
    <td>No</td>
    <td class="center">Name</td>
    <td class="center">Description</td>
    <td style="text-align:center;">Aksi</td>            
</tr>
</thead>
<tbody>
<tr>
    <?php $i=1;?>
    <?php foreach ($kategori as $ktg) :?>
    <td><?=$i;?></td>
    <td><?=$ktg['name'];?></td>    
    <td><?=$ktg['description'];?></td>    
    <td>
        <a href="<?=base_url();?>karyawan/hapus/<?=$ktg['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus');"><i class="fas fa-trash"></i></a>
        <a href="<?=base_url();?>karyawan/edit/<?=$ktg['id'];?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
    </td>
</tr>
<?php $i++;?>
    <?php endforeach;?>
</tbody>
</table>
    </div>
</div>