<?php $this->load->view('template/header');?>
<title>Obat</title>  

<div class="container mt-3">

        <div class="card">
  <div class="card-header">
  
  
<div class="row">
<div class="col-sm-10">
  <h3>List Obat</h3>
</div>
  <div class="col-sm-2">
  
</div>
</div>


  </div>
  <div class="card-body">
  <a href="<?= base_url('Obat/tambah_obat');?>" type="button" class="btn btn-success"><i class="icon-plus"></i>&nbsp Tambah Obat</a>
  <hr>
  <blockquote class="blockquote mb-0">
      <?php echo $this->session->flashdata('msg_add_obat'); ?>
      <?php echo $this->session->flashdata('msg_update_obat'); ?>
      <?php echo $this->session->flashdata('msg_del_obat'); ?>
                      <table class="table table-bordered table-striped">
                      <tr style="text-align:center;">
                <th>ID Obat</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
</tr>

<?php foreach($obat as $row){ ?>
        <tr style="text-align:center;">
<td><?php echo $row->idobat?></td>
<td><?php echo $row->nama?></td>
<td><?php echo $row->harga?></td>
<td style="text-align:center;">
    <a href="Obat/edit_obat?id=<?php echo htmlspecialchars($row->idobat) ?>" type="button" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp Edit</a>  
    <a href="Obat/delete_obat?id=<?php echo htmlspecialchars($row->idobat) ?>" title="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')"><i class="icon-trash"></i>&nbspDelete</a></td>
</tr>
         <?php }?>


                                      </table>
    </blockquote>
  </div>
</div>


            </div>
        </div>
    </div>

                                     
</div>

<?php $this->load->view('template/footer');?>