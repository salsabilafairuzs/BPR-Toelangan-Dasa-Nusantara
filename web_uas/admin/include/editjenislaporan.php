<?php 
if(isset($_GET['data'])){
	$id_jenis_laporan = $_GET['data'];
	$_SESSION['id_jenis_laporan']=$id_jenis_laporan;
	
  //get data jenis laporan
	$sql_d = "select `jenis_laporan` from `jenis_laporan` where `id_jenis_laporan` = '$id_jenis_laporan'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $jenis_laporan= $data_d[0];
    }
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Jenis Laporan</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?include=jenis-laporan">Jenis Laporan</a></li>
            <li class="breadcrumb-item active">Edit Jenis Laporan</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row"> 
        <div class="col-sm-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary far fa-list-alt"> Form Edit Jenis Laporan</h6>
                    <a href="index.php?include=jenis-laporan" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
                <br>
                <div class="col-sm-10">
                <?php if((!empty($_GET['notif']))){?>
                    <?php if($_GET['notif']=="editkosong"){?>
                        <div class="alert alert-danger bg-danger" role="alert">Maaf data wajib di isi</div>
                    <?php }?>
                <?php }?>
                </div>
                <form class="form-horizontal" action="index.php?include=konfirmasi-edit-jenis-laporan" method="post">
                    <div class="card-body">          
                        <div class="form-group row">
                            <label for="jenis_laporan" class="col-sm-2 col-form-label">Jenis Laporan</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="jenis_laporan" id="jenis_laporan" value="<?php echo $jenis_laporan; ?>">
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