<?php
if(isset($_GET['data'])){
	$id_berita = $_GET['data'];
	$_SESSION['id_berita']=$id_berita;
	//get data berita
	$sql_m = "SELECT `judul`, `isi` FROM `berita` WHERE `id_berita`='$id_berita'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$judul= $data_m[0];
		$isi = $data_m[1];
	}
	//get tag
	$sql_h = "select `id_tag` from `tag_berita` 
        where `id_berita`='$id_berita'";
	$query_h = mysqli_query($koneksi,$sql_h);
	$array_tag = array();
	while($data_h = mysqli_fetch_row($query_h)){
		$id_tag= $data_h[0];
		$array_tag[] = $id_tag;
	} 
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Berita</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?include=berita">Berita</a></li>
            <li class="breadcrumb-item active">Edit Berita</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row"> 
        <div class="col-sm-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary far fa-list-alt"> Form Edit Berita</h6>
                    <a href="index.php?include=berita" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
                <br>
                <div class="col-sm-10">
                <?php if((!empty($_GET['notif'])) &&(!empty($_GET['jenis']))){?>
                    <?php if($_GET['notif']=="editkosong"){?>
                        <div class="alert alert-danger bg-danger" role="alert">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
                    <?php }?>
                <?php }?>
                </div>
                <form class="form-horizontal" action="index.php?include=konfirmasi-edit-berita" method="post" enctype="multipart/form-data">
                    <div class="card-body">          
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $judul;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="isi" id="editor1" rows="12"><?php echo $isi;?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tag" class="col-sm-3 col-form-label">Tag</label>
                            <div class="col-sm-7">
                                <?php 
                                $sql_g = "SELECT `id_tag`,`tag` FROM `tag`
                                ORDER BY `tag`";
                                $query_g = mysqli_query($koneksi, $sql_g);
                                while($data_g = mysqli_fetch_row($query_g)){
                                $id_tg = $data_g[0];
                                $tg = $data_g[1];
                                ?>
                                <input type="checkbox"  name="tag[]" value="<?php echo $id_tg;?>"
                                <?php if(in_array($id_tg, $array_tag)){?>checked="checked" <?php }?>> 
                                <?php echo $tg;?> </br>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cover" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="cover" id="customFile">
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