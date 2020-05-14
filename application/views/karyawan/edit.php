<style>
    label {
        color: white;
    }
</style>
<div class="col" style="background-color: blueviolet;">
    <div class="container">
        <div class="col-md-6">
            <h2 class="text-white">Form Edit Data</h2>
            <form action="" class="form-horizontal" method="POST">
            <input type="hidden" name="id" placeholder="Masukkan nama" class="form-control" value="<?= $karyawan['id'];?>">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan nama" class="form-control" value="<?= $karyawan['nama'];?>">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="ttl" placeholder="Tempat Tanggal Lahir" class="form-control" value="<?= $karyawan['ttl'];?>">
                    <small><span class="text-danger"><?=form_error('ttl');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" name="jabatan" placeholder="Jabatan" class="form-control" value="<?= $karyawan['jabatan'];?>">
                    <small><span class="text-danger"><?=form_error('jabatan');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" value="<?= $karyawan['alamat'];?>">
                    <small><span class="text-danger"><?=form_error('alamat');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Lama Bekerja</label>
                    <input type="text" name="lama_bekerja" placeholder="Lama Bekerja" class="form-control" value="<?= $karyawan['lama_bekerja'];?>">
                    <small><span class="text-danger"><?=form_error('lama_bekerja');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Gaji</label>
                    <input type="text" name="gaji" placeholder="Gaji" class="form-control" value="<?= $karyawan['gaji'];?>">
                    <small><span class="text-danger"><?=form_error('gaji');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Tunjangan</label>
                    <input type="text" name="tunjangan" placeholder="Tunjangan" class="form-control" value="<?= $karyawan['tunjangan'];?>">
                    <small><span class="text-danger"><?=form_error('tunjangan');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Potongan</label>
                    <input type="text" name="potongan" placeholder="Potongan" class="form-control" value="<?= $karyawan['potongan'];?>">
                    <small><span class="text-danger"><?=form_error('potongan');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Cuti</label>
                    <input type="text" name="cuti" placeholder="Cuti" class="form-control" value="<?= $karyawan['cuti'];?>">
                    <small><span class="text-danger"><?=form_error('cuti');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Absen</label>
                    <input type="text" name="absen" placeholder="Absen" class="form-control" value="<?= $karyawan['absen'];?>">
                    <small><span class="text-danger"><?=form_error('absen');?></span></small>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Edit Data</button>
                <a href="<?=base_url('karyawan');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>
</div>