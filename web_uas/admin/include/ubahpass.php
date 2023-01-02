<?php 
if(isset($_GET['data'])){
	$id_tag = $_GET['data'];
	$_SESSION['id_tag']=$id_tag;
	
  //get data tag
	$sql_d = "select `tag` from `tag` where `id_tag` = '$id_tag'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $tag= $data_d[0];
    }
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Password</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Ubah Password</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row"> 
        <div class="col-sm-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary far fa-list-alt"> Form Ubah Password</h6>
                </div>
                <br>
                <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="passlamakosong"){?>
                    <div class="alert alert-danger" role="alert">Password Lama Tidak Boleh Kosong</div>
                    <?php } else if($_GET['notif']=="passbarukosong"){?>
                    <div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Kosong</div>
                    <?php } else if($_GET['notif']=="passkonfirmkosong"){?>
                    <div class="alert alert-danger" role="alert">Konfirmasi Password Tidak Boleh Kosong</div>
                    <?php } else if($_GET['notif']=="passsalah"){?>
                    <div class="alert alert-danger" role="alert">Password Gagal Diubah, Silakan Ubah Kembali</div>
                    <?php } else if($_GET['notif']=="editberhasil"){?>
                    <div class="alert alert-success" role="alert">Password Berhasil Diubah</div>
                    <?php } ?>
                <?php }?>
                </div>
                <form class="form-horizontal" action="index.php?include=konfirmasi-ubah-password" method="post">
                    <div class="card-body">
                        <h6>
                            <i class="text-blue"><i class="fas fa-info-circle"></i> Silahkan memasukkan password lama dan password baru Anda untuk mengubah password.</i>
                        </h6><br>
                        
                        <div class="form-group row">
                            <label for="pass_lama" class="col-sm-3 col-form-label">Password Lama</label>
                            <div class="col-sm-7">
                            <input type="password" class="form-control" id="pass_lama" name="pass_lama" value="">
                            <!--<span class="text-danger">Mohon maaf, password lama wajib diisi.</span>-->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pass_baru" class="col-sm-3 col-form-label">Password Baru</label>
                            <div class="col-sm-7">
                            <input type="password" class="form-control" id="pass_baru" name="pass_baru" value="">
                            <!--<span class="text-danger">Mohon maaf, password baru wajib diisi.</span>-->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="konfirmasi" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                            <div class="col-sm-7">
                            <input type="password" class="form-control" id="konfirmasi" name="konfirm_pass" value="">
                            <span class="text-danger">Mohon maaf, konfirmasi password baru wajib diisi.</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                   
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary float-right mb-3"><i class="fas fa-save"></i> Simpan</button>
                    </div>  
                    
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>