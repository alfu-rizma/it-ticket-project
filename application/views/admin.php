
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Miuriel Project</title>
  <link href="<?php echo base_url();?>/assets/admin/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/admin/datatable/dataTables.min.css" rel="stylesheet">

</head>

<body>  
<div class="container">
  <h4 class="mt-3"></h4>
    <p class="mb-4"></p> 
      <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success');?>
      </div> 
      <?php endif;?>   
      <?php if ($this->session->flashdata('delete')): ?>
      <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('delete');?>
      </div> 
      <?php endif;?> 

      <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Kerusakan Perangkat SMK Sri Tanjung</h6>
        </div>                        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="width: 30px;">No.</th>
                  <th>Name</th>
                  <th>Perangkat</th>
                  <th>Kerusakan</th>
                  <th>Tanggal</th>
                  <th>Proses</th>
                  <th style="width: 70px;">Aksi</th>                  
                </tr>
              </thead>                  
              <tbody>
              <?php $no=1;
                foreach ($kerusakan as $datakerusakan): ?>
              <tr>
                <td style="text-align: center;"><?php echo $no++;?></td>
                <td><?php echo $datakerusakan->name;?></td>
                <td><?php echo $datakerusakan->perangkat;?></td>
                <td><?php echo $datakerusakan->deskripsi;?></td>
                <td><?php echo $datakerusakan->waktu_input;?></td>
                <td><?php echo $datakerusakan->proses;?></td>
                <td style="text-align: center;">
                  <a href="<?php echo base_url();?>kerusakan/editdata/<?php echo $datakerusakan->id;?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                  
                </td>                      
              </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>    
    <footer class="mt-5 mb-3">
    <div class="container my-auto">
      <div class="text-center my-auto">
      
        <span>developed by <a href="https://linkedin.com/in/alfurizmaramadhani" target="_blank" style="color: #424242;"><b>Alfurizma Ramadhani</b><a></span>
      </div>
    </div>
  </footer> 
</div>             
   

  <script src="<?php echo base_url(); ?>/assets/admin/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/admin/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/admin/datatable/datatables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable();
    });
  </script>
</body>
</html>
