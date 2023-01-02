<?php 
if(isset($_GET['data'])){
	$id_profil = $_GET['data'];
	$_SESSION['id_profil']=$id_profil;
	
  //get data profil
	$sql_d = "select `profil`, `isi` from `profil` where `id_profil` = '$id_profil'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while($data_d = mysqli_fetch_row($query_d)){
    $profil= $data_d[0];
    $isi= $data_d[1];
  }
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Profil</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?include=data-profil">Data Profil</a></li>
            <li class="breadcrumb-item active">Edit Data Profil</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row"> 
        <div class="col-sm-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary far fa-list-alt"> Form Edit Data Profil</h6>
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
                <form class="form-horizontal" action="index.php?include=konfirmasi-edit-data-profil" method="post">
                    <div class="card-body">          
                    <div class="form-group row">
                        <label for="profil" class="col-sm-2 col-form-label">Nama Profil</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="profil" id="profil" value="<?php echo $profil; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                        <div class="col-sm-8">
                        <textarea class="form-control" name="isi" id="editor1" rows="12"><?php echo $isi; ?></textarea>
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