<style>
    label {
        color: white;
    }
</style>
<div class="col" style="background-color: blueviolet;">
    <div class="container">
        <div class="col-md-6">
            <h2 class="text-white">Form Tambah Data</h2>
            <form action="" class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan nama" class="form-control">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <small><span class="text-danger"><?=form_error('jenis_kelamin');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                    <small><span class="text-danger"><?=form_error('tempat_lahir');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" placeholder="" class="form-control">
                    <small><span class="text-danger"><?=form_error('tanggal_lahir');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
                    <small><span class="text-danger"><?=form_error('alamat');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">No. Handphone</label>
                    <input type="text" name="HP" placeholder="Masukkan nomor handphone" class="form-control">
                    <small><span class="text-danger"><?=form_error('HP');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Jenjang</label>
                    <select name="jenjang" id="jenjang" class="form-control">
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S1">S2</option>
                        <option value="S1">S3</option>
                    </select>
                    <small><span class="text-danger"><?=form_error('jenjang');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Program</label>
                    <select name="program" id="program" class="form-control">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Matematika">Matematika</option>
                    </select>
                    <small><span class="text-danger"><?=form_error('jenjang');?></span></small>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('dosen');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>
</div>