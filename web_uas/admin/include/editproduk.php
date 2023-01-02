<?php
if(isset($_GET['data'])){
	$id_produk = $_GET['data'];
	$_SESSION['id_produk']=$id_produk;
	//get data produk
	$sql_m = "SELECT `id_jenis_produk`,`nama_produk`,`deskripsi`,`keunggulan`,
    `syarat`,`fitur` FROM `produk` WHERE `id_produk`='$id_produk'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$id_jenis_produk= $data_m[0];
		$nama_produk = $data_m[1];
		$deskripsi = $data_m[2];
        $keunggulan = $data_m[3];
        $syarat = $data_m[4];
        $fitur = $data_m[5];
	}
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Produk</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?include=produk">Produk</a></li>
            <li class="breadcrumb-item active">Edit Produk</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row"> 
        <div class="col-sm-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary far fa-list-alt"> Form Edit Produk</h6>
                    <a href="index.php?include=produk" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
                <br>
                <div class="col-sm-10">
                <?php if((!empty($_GET['notif'])) &&(!empty($_GET['jenis']))){?>
                    <?php if($_GET['notif']=="editkosong"){?>
                        <div class="alert alert-danger bg-danger" role="alert">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
                    <?php }?>
                <?php }?>
                </div>
                <form class="form-horizontal" action="index.php?include=konfirmasi-edit-produk" method="post" enctype="multipart/form-data">
                    <div class="card-body"> 
                    <div class="form-group row">
                        <label for="jenis_produk" class="col-sm-2 col-form-label">Jenis Produk</label>
                        <div class="col-sm-8">
                        <select class="form-control" id="jenis_produk" name="jenis_produk">
                        <option value="">- Pilih Jenis Produk -</option>
                        <?php 
                        $sql_k = "SELECT `id_jenis_produk`,`jenis_produk` FROM 
                        `jenis_produk` ORDER BY `jenis_produk`";
                        $query_k = mysqli_query($koneksi, $sql_k);
                        while($data_k = mysqli_fetch_row($query_k)){
                        $id_jenis = $data_k[0];
                        $jenis = $data_k[1];
                        ?>
                        <option value="<?php echo $id_jenis;?>" 
                        <?php if($id_jenis==$id_jenis_produk){?>
                        selected <?php }?>><?php echo $jenis;?></option>
                        <?php }?>
                        </select>
                        </div>
                    </div>         
                        <div class="form-group row">
                            <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="<?php echo $nama_produk;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="deskripsi" id="editor1" rows="12"><?php echo $deskripsi;?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keunggulan" class="col-sm-2 col-form-label">Keunggulan</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="keunggulan" id="editor1" rows="12"><?php echo $keunggulan;?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="syarat" class="col-sm-2 col-form-label">Syarat</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="syarat" id="editor1" rows="12"><?php echo $syarat;?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fitur" class="col-sm-2 col-form-label">Fitur</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="fitur" id="editor1" rows="12"><?php echo $fitur;?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>  
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