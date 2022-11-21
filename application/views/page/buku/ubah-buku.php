<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <?= form_open_multipart('buku/ubahkategori'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-formlabel">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kategori" name="email" value="<?= $user['kategori']; ?>" readonly>
                    <?= form_error('nama', '<small class="textdanger pl-3">', '</small>'); ?>

                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="nama" class="col-sm-2 col-formlabel">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                </div>
            </div> -->
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btnprimary">Ubah</button>
                    <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->