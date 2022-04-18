<?php $this->load->view('template/header');?>
<title>Perawatan</title>  

<div class="container mt-5">

<div class="container-fluid mt-3">

        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel List Perawatan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <?php echo $this->session->flashdata('msg_add_rawat'); ?>
      <?php echo $this->session->flashdata('msg_update_rawat'); ?>
      <?php echo $this->session->flashdata('msg_del_rawat'); ?>
                     <!-- <div class="form-group row">
                    <div class="col-sm-3"> -->
  <a href="<?= base_url('rawat/tambah_rawat');?>" type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp Tambah Rawat</a>&nbsp
<!-- </div>
<div class="col-sm-9"> -->
     <a href="<?= base_url('rawat/cetak_pdf');?>" type="button" class="btn btn-primary"><i class="fa fa-download"></i>&nbsp Cetak Nota</a>
<!-- </div> -->
<!-- </div> -->
 <hr>
                    <thead>
                    <tr style="text-align:center;">
                  <th>ID</th>
                <th>ID Pasien</th>
                <th>Tanggal Rawat</th>
                <th>Total Tindakan</th>
                <th>Total Obat</th>
                <th style="background-color:blue; color:white;">Total Harga</th>
                <th>Uang Muka</th>
                <th style="background-color:red; color:white;">Kekurangan</th>
                <th>Nama Pasien</th>
                <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
          <?php foreach($rawat as $row){   
   ?>     
   <tr style="text-align:center;">
                <td><?php echo $row->idrawat?></td>
                <td><?php echo $row->idpasien?></td>
                <td><?php echo $row->tglrawat?></td>
                <td><?php echo $row->totaltindakan?></td>
                <td><?php echo $row->totalobat?></td>
                <td style="background-color:blue; color:white;"><?php echo $row->totalharga?></td>
                <td><?php echo $row->uangmuka?></td>
                <td style="background-color:red; color:white;"><?php echo $row->kurang?></td>
                <td><?php echo $row->nama?></td>
                <td>
                    <a href="rawat/edit_rawat?id=<?php echo htmlspecialchars($row->idrawat) ?>" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>&nbsp Edit</a>  
                    &nbsp<a href="rawat/delete_rawat?id=<?php echo htmlspecialchars($row->idrawat) ?>" title="delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item')"><i class="fa fa-trash"></i>&nbspDelete</a>
                </td>
      </tr>
                <?php }?>

                  </tbody>
                </table>
                 <p style="color:blue;">*<i>Total Harga berdasarkan Total Obat + Total Tindakan</i></p>
            <p style="color:red;">*<i>Biaya Kekurangan berdasarkan Total Harga - Uang Muka</i></p>
              </div>
            </div>
          </div>

        </div>

      </div>  
  

  </div>
</div>


            </div>
        </div>
    </div>

                                     
</div>

<!-- <div class="container mt-3">

        <div class="card">
  <div class="card-header">
  
  
<div class="row">
<div class="col-sm-10">
  <h3>List Rawat</h3>
</div>
  <div class="col-sm-2">
  
</div>
</div>


  </div>
  <div class="card-body">
      <div class="form-group row">
                    <div class="col-sm-2">
  <a href="<?= base_url('rawat/tambah_rawat');?>" type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp Tambah Rawat</a>
</div>
<div class="col-sm-10">
     <a href="<?= base_url('rawat/cetak_pdf');?>" type="button" class="btn btn-primary"><i class="fa fa-download-alt"></i>&nbsp Cetak Nota</a>
</div>
</div> 
 
  <hr>

 <form class="d-flex">
<input class="form-control me-2" type='text' id='input' onkeyup='searchTable()' type="search" placeholder="Search..." aria-label="Search">
      </form>
      <br>
  <blockquote class="blockquote mb-0">
      <?php echo $this->session->flashdata('msg_add_rawat'); ?>
      <?php echo $this->session->flashdata('msg_update_rawat'); ?>
      <?php echo $this->session->flashdata('msg_del_rawat'); ?>
        <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                      <thead>
                      <tr style="text-align:center;">
                <th>ID</th>
                <th>ID Pasien</th>
                <th>Tanggal Rawat</th>
                <th>Total Tindakan</th>
                <th>Total Obat</th>
                <th style="background-color:blue; color:white;">Total Harga</th>
                <th>Uang Muka</th>
                <th style="background-color:red; color:white;">Kekurangan</th>
                <th>Nama Pasien</th>
                <th>Aksi</th>
            </tr>
            </thead>

            <tbody>
<?php foreach($rawat as $row){   
   ?>     <tr style="text-align:center;">
                <td><?php echo $row->idrawat?></td>
                <td><?php echo $row->idpasien?></td>
                <td><?php echo $row->tglrawat?></td>
                <td><?php echo $row->totaltindakan?></td>
                <td><?php echo $row->totalobat?></td>
                <td style="background-color:blue; color:white;"><?php echo $row->totalharga?></td>
                <td><?php echo $row->uangmuka?></td>
                <td style="background-color:red; color:white;"><?php echo $row->kurang?></td>
                <td><?php echo $row->nama?></td>
                <td style="text-align:center;">

                    <a href="rawat/edit_rawat?id=<?php echo htmlspecialchars($row->idrawat) ?>" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>&nbsp Edit</a>  
 
                    <a href="rawat/delete_rawat?id=<?php echo htmlspecialchars($row->idrawat) ?>" title="delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item')"><i class="fa fa-trash"></i>&nbspDelete</a>
                </td>
      </tr>
                <?php }?>
                            </tbody>
                  </table>
</div>
                  <p style="color:blue;">*<i>Total Harga berdasarkan Total Obat + Total Tindakan</i></p>
            <p style="color:red;">*<i>Biaya Kekurangan berdasarkan Total Harga - Uang Muka</i></p>
    </blockquote>
  </div>
</div>


            </div>
        </div>
    </div>        
</div> -->

<?php $this->load->view('template/footer');?>