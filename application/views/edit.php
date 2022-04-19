<div class="container my-3">
    <?php if ($this->session->flashdata('pesan') != '') { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">Tambah Pasien:</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                        <form action="<?= base_url('Pasien/update_pasien') ?>" method="POST" enctype="multipart/form-data">
                                <label for="idpasien">ID Pasien:</label>
                                <input type="text" name="idpasien" id="idpasien" value="<?=$pasien['idpasien']?>" class="form-control" required>
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" id="nama" value="<?=$pasien['nama']?>" class="form-control">
                                <label for="alamat">Alamat:</label>
                                <input type="alamat" name="alamat" id="alamat" value="<?=$pasien['alamat']?>" class="form-control" required>
                                <label for="tgllahir">Tanggal lahir:</label>
                                <input type="text" name="tgllahir" id="tgllahir" value="<?=$pasien['tgllahir']?>" class="form-control" required>
                                <label for="notelp">No Telepon:</label>
                                <input type="text" name="notelp" id="notelp" value="<?=$pasien['notelp']?>"class="form-control" required>
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>