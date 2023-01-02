<?php 
// include('../koneksi/koneksi.php');
if(isset($_SESSION['id_user'])){
	$id_user = $_SESSION['id_user'];
  $sql_d = "select `nama`, `email` from `user` 
  where `id_user` = '$id_user'";
	$query_d = mysqli_query($koneksi,$sql_d);
	while($data_d = mysqli_fetch_row($query_d)){
    $nama= $data_d[0];
    $email= $data_d[1];
	}
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Profil</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?include=profil">Profil</a></li>
            <li class="breadcrumb-item active">Edit Profil</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row"> 
        <div class="col-sm-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary far fa-list-alt"> Form Edit Profil</h6>
                    <a href="index.php?include=profil" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
                <br>
                <div class="col-sm-10">
                <?php if((!empty($_GET['notif']))){?>
                    <?php if($_GET['notif']=="editkosong"){?>
                        <div class="alert alert-danger bg-danger" role="alert">Maaf data wajib di isi</div>
                    <?php }?>
                <?php }?>
                </div>
                <form class="form-horizontal" action="index.php?include=konfirmasi-edit-profil" method="post" enctype="multipart/form-data">
                    <div class="card-body">          
                    <div class="form-group row">
                        <label for="foto" class="col-sm-1 col-form-label">Foto</label>
                        <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>  
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-1 col-form-label">Nama</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
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