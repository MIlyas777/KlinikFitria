<?php $this->load->view('template/header');?>
<title>Perawatan</title>  

<div class="container mt-3">

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
  <a href="<?= base_url('rawat/tambah_rawat');?>" type="button" class="btn btn-success"><i class="icon-plus"></i>&nbsp Tambah Rawat</a>
  <hr>

 <form class="d-flex">
<input class="form-control me-2" type='text' id='input' onkeyup='searchTable()' type="search" placeholder="Search..." aria-label="Search">
      </form>
      <br>
  <blockquote class="blockquote mb-0">
      <?php echo $this->session->flashdata('msg_add_rawat'); ?>
      <?php echo $this->session->flashdata('msg_update_rawat'); ?>
      <?php echo $this->session->flashdata('msg_del_rawat'); ?>
                      <table class="table table-bordered table-striped">
                      <thead>
                      <tr style="text-align:center;">
                <th>ID</th>
                <th>Tanggal Rawat</th>
                <th>Total Tindakan</th>
                <th>Total Obat</th>
                <th style="background-color:yellow;">Total Harga</th>
                <th>Uang Muka</th>
                <th style="background-color:red; color:white;">Kekurangan</th>
                <th>ID Pasien</th>
                <th>Aksi</th>
            </tr>
            </thead>

            <tbody>
<?php foreach($rawat as $row){     ?>
        <tr style="text-align:center;">
<td><?php echo $row->idrawat?></td>
<td><?php echo $row->tglrawat?></td>
<td><?php echo $row->totaltindakan?></td>
<td><?php echo $row->totalobat?></td>
<td style="background-color:yellow;"><?php echo $row->totalharga?></td>
<td><?php echo $row->uangmuka?></td>
<td style="background-color:red; color:white;"><?php echo $row->kurang?></td>
<td><?php echo $row->idpasien?></td>
<td style="text-align:center;">
<div class="form-group row">
    <div class="col-sm-6">
    <a href="rawat/edit_rawat?id=<?php echo htmlspecialchars($row->idrawat) ?>" type="button" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp Edit</a>  
</div>
    <div class="col-sm-6">
    <a href="rawat/delete_rawat?id=<?php echo htmlspecialchars($row->idrawat) ?>" title="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')"><i class="icon-trash"></i>&nbspDelete</a></td>
</div>
</div>


</tr>
         <?php }?>
</tbody>

                                      </table>
    </blockquote>
  </div>
</div>


            </div>
        </div>
    </div>        
</div>


<script>
    function searchTable() {
        var input;
        var saring;
        var status;
        var tbody;
        var tr;
        var td;
        var i;
        var j;
        input = document.getElementById("input");
        saring = input.value.toUpperCase();
        tbody = document.getElementsByTagName("tbody")[0];;
        tr = tbody.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
                    status = true;
                }
            }
            if (status) {
                tr[i].style.display = "";
                status = false;
            } else {
                tr[i].style.display = "none";
            }
        }
    }
</script>

<?php $this->load->view('template/footer');?>