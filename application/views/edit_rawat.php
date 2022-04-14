<?php $this->load->view('template/header'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Rawat</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
            <form action="edit_rawat_proses" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="Tgl_Rawat" class="form-label">Tanggal Perawatan</label>
                                    <input value ="<?php echo htmlspecialchars($rawat->tglrawat); ?>" type="text" name="tglrawat" class="form-control" id="tglrawat">
                                </div>
                                <div class="mb-3">
                                    <label for="Total_Tindakan" class="form-label">Total Tindakan</label>
                                    <input value ="<?php echo htmlspecialchars($rawat->totaltindakan); ?>"type="number" min="0" name="totaltindakan" class="form-control" id="totaltindakan">
                                </div>
                                <div class="mb-3">
                                    <label for="Total_Obat" class="form-label">Total Obat</label>
                                    <input value ="<?php echo htmlspecialchars($rawat->totalobat); ?>"type="number" min="0" name="totalobat" class="form-control" id="totalobat">
                                </div>
                                <div class="mb-3">
                                    <label for="Uang_Muka" class="form-label">Uang Muka</label>
                                    <input value ="<?php echo htmlspecialchars($rawat->uangmuka); ?>"type="number" min="0" name="uangmuka" class="form-control" id="uangmuka">
                                </div>
                                
                                <input type="hidden" name="idrawat" id="idrawat" value=<?php echo htmlspecialchars($rawat->idrawat); ?>>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>  
            
          </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 

<?php $this->load->view('template/footer'); ?>