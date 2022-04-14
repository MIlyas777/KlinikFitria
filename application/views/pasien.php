<?php $this->load->view('template/header');?>
<title>Pasien</title>  

<div class="container mt-3">

        <div class="card">
  <div class="card-header">
  
  
<div class="row">
<div class="col-sm-10">
  <h3>List Pasien</h3>
</div>
  <div class="col-sm-2">
  
</div>
</div>


  </div>
  <div class="card-body">
  <a href="<?= base_url('pasien/tambah_pasien');?>" type="button" class="btn btn-success"><i class="icon-plus"></i>&nbsp Tambah Pasien</a>
  <hr>

 <form class="d-flex">
<input class="form-control me-2" type='text' id='input' onkeyup='searchTable()' type="search" placeholder="Search..." aria-label="Search">
      </form>
      <br>
  <blockquote class="blockquote mb-0">
      <?php echo $this->session->flashdata('msg_add_pasien'); ?>
      <?php echo $this->session->flashdata('msg_update_pasien'); ?>
      <?php echo $this->session->flashdata('msg_del_pasien'); ?>
                      <table class="table table-bordered table-striped">
                      <thead>
                      <tr style="text-align:center;">
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
            </thead>

            <tbody>
<?php foreach($pasien as $row){     ?>
        <tr style="text-align:center;">
                <td><?php echo $row->idpasien?></td>
                <td><?php echo $row->nama?></td>
                <td><?php echo $row->alamat?></td>
                <td><?php echo $row->tgllahir?></td>
                <td><?php echo $row->notelp?></td>
      <td style="text-align:center;">

                    <a href="pasien/edit_pasien?id=<?php echo htmlspecialchars($row->idpasien) ?>" type="button" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp Edit</a>  
                    <a href="pasien/delete_pasien?id=<?php echo htmlspecialchars($row->idpasien) ?>" title="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')"><i class="icon-trash"></i>&nbspDelete</a></td>
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