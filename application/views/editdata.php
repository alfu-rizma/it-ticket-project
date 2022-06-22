<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>miuriel Project</title>
    <link href="<?php echo base_url();?>/assets/admin/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h4 class="mt-4">Miuriel Project</h4>
        <p class="mb-4"></p>
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>kerusakan/admin"
                    style="color: #155724">Lihat data</a></u>
        </div>
        <?php endif;?>
        <form method="POST" action="<?php echo base_url();?>kerusakan/updatedata" enctype="multipart/form-data">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Status </h6>
                </div>
                <div class="card-body">
                    <input  type="hidden" name="id" value="<?php echo $kerusakan->id;?>">
                    <label hidden for="name">Nama Bapak / Ibu</label>
                    <div class="form-group">
                        <input hidden type="text" class="form-control form-control-user" placeholder="Masukkan Nama"
                            name="name" required="" value="<?php echo $kerusakan->name;?>">
                    </div>
                    <label hidden for="perangkat">Perangkat</label>
                    <div class="form-group">
                        <input hidden type="text" class="form-control form-control-user" placeholder="Masukkan Perangkat"
                            name="perangkat" required="" value="<?php echo $kerusakan->perangkat;?>">
                    </div>
                    <label hidden for="deskripsi">Deskripsi</label>
                    <div class="form-group">
                        <input hidden type="text" class="form-control form-control-user" placeholder="deskripsi"
                            name="deskripsi" required="" value="<?php echo $kerusakan->deskripsi;?>">
                    </div>
                    <label for="proses">Proses</label>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="proses" name="proses"
                            required="" value="<?php echo $kerusakan->proses;?>">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                    <a href="<?php echo base_url();?>/kerusakan/admin" class="btn btn-default">Batal</a>
                </div>
            </div>
        </form>
        <footer class="mt-5 mb-3">
            <div class="container my-auto">
                <div class="text-center my-auto">
                    <span>developed by <a href="https://linkedin.com/in/alfurizmaramadhani" target="_blank"
                            style="color: #424242;"><b>indrijunanda</b><a></span>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?php echo base_url(); ?>/assets/admin/jquery/jquery.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/admin/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>