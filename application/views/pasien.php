<?php $this->load->view('template/header'); ?> 
<div class="container my-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Daftar Pasien
				</div>
				<div class="card-body">
                    <!-- menambah tombol tambah buku -->
                    <strong>Tambah Pasien</strong><br>
                    <a href="<?php echo base_url('Pasien/add_pasien')?>" class="btn btn-success">Tambah Pasien</a>
					<a href="<?php echo base_url('Pasien/print_pasien')?>" class="btn btn-success">Print</a>
					<div class="input-group mb-3">
						<!-- <form action="" method="GET">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Keyword" name="keyword" placeholder="Masukkan nama buku" aria-describedby="button-addon2">
								<button class="btn btn-outline-secondary" type="submit">Cari</button>
							</div>
						</form> -->
					</div>
					<!-- Membuat tabel buku -->
					<div class="table-responsive">
						<table class="table table-bordered table-striped" id="table_id">
							<thead>
							<tr>
								<th>ID Pasien</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Tanggal lahir</th>
								<th>No Telepon</th>
                                <th>Aksi</th>
							</tr>
							</thead>
							<tbody>
							<!-- Jika ada keyword -->
							<?php if (isset($_GET['keyword'])) { ?>
								<p>Menampilkan data dengan kata kunci <strong><?php echo $_GET['keyword'] ?></strong></p>
								<?php foreach ($listkeyword as $b) { ?>
                                    <tr>
                                        <td><?php echo $b->idpasien; ?></td>
                                        <td><?php echo $b->nama; ?></td>
                                        <td><?php echo $b->alamat; ?></td>
                                        <td><?php echo $b->tgllahir; ?></td>
                                        <td><?php echo $b->notelp; ?></td>
									<?php } ?>
									</tbody>
						</table>
					</div>
				<?php } else { ?>
					<!-- Menampilkan array $listpasien -->
					<?php
								foreach ($listpasien as $b) { ?>
						<tr>
							<td><?php echo $b->idpasien; ?></td>
							<td><?php echo $b->nama; ?></td>
							<td><?php echo $b->alamat; ?></td>
							<td><?php echo $b->tgllahir; ?></td>
							<td><?php echo $b->notelp; ?></td>
                            <td>
                                <a href="<?= base_url('Pasien/edit_pasien/'. $b->idpasien)?>" class="btn btn-warning ml-1 mt-1">Edit</a>
                                <a href="<?= base_url('Pasien/delete_pasien/'. $b->idpasien) ?>" " onclick="return confirm('Apakah Anda yakin menghapus pasien ini?')" class="btn btn-danger ml-1 mt-1">Hapus</a>
                            </td>
                            <!-- Admin/edit_pasien?id=<?php echo $b->id_pasien; ?> -->
                            <!-- Admin/delete_pasien?id=<?php echo $b->id_pasien; ?> -->
						<?php } ?>
						</table>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('template/footer'); ?> 

