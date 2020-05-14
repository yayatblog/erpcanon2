<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!-- <ol class=""> -->
<h2>
    Menu Data Karyawan
    <div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data Karyawan..." class="form-control" autocomplete="off">
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
<a href="<?= base_url('karyawan/tambah');?>" class="btn btn-info">Tambah Data</a>
<div class="table-responsive">
<table class="table table-responsive" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Kode Produk</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Detail</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($erpcanon as $erp): ?>
            <tr>
                <td width="150">
                    <?php echo $erp->nama ?>
                </td>
                <td>
                    <?php echo $erp->kode ?>
                </td>
                <td>
                    <?php echo $erp->name ?>
                </td>
                <td>
                    <?php echo $erp->hargajual ?>
                </td>
                <td>
                    <?php echo $erp->hargabeli ?>
                </td>
                <td class="small">
                    <?php echo $erp->detail?>
                </td>
                <td>
                    <img src="<?php echo base_url('upload/product/'.$erp->image) ?>" width="100" style="border-radius: 5px;" />
                </td>
                <td>
                    <a href="<?php echo base_url('products/edit/'.$erp->product_id) ?>"
                     class="btn btn-primary small"><i class="fas fa-edit"></i></a>
                    <a onclick="deleteConfirm('<?php echo base_url('products/delete/'.$erp->product_id) ?>')"
                     href="#!" class="btn btn-danger small"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    </div>
</div>