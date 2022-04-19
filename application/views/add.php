<?php $this->load->view('template/header')?>
<div class="container my-3">
    
      
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">Tambah Pasien:</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <form action="<?= base_url('Pasien/insert_pasien') ?>" method="POST" enctype="multipart/form-data">
                                <label for="idpasien">ID Pasien:</label>
                                <input type="text" name="idpasien" id="idpasien" class="form-control" required>
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                                <label for="alamat">Alamat:</label>
                                <input type="alamat" name="alamat" id="alamat" class="form-control" required>
                                <label for="tgllahir">Tanggal lahir:</label>
                                <input type="date" name="tgllahir" id="tgllahir" class="form-control" required>
                                <label for="notelp">No Telepon:</label>
                                <input type="text" name="notelp" id="notelp" class="form-control" required>
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>