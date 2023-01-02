<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Berita</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?include=berita">Berita</a></li>
            <li class="breadcrumb-item active">Tambah Berita</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row"> 
        <div class="col-sm-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary far fa-list-alt"> Form Tambah Berita</h6>
                    <a href="index.php?include=berita" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
                <br>
                <div class="col-sm-10">
                <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
                    <?php if($_GET['notif']=="tambahkosong"){?>
                        <div class="alert alert-danger bg-danger" role="alert">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
                    <?php }?>
                <?php }?>
                </div>
                <form class="form-horizontal" action="index.php?include=konfirmasi-tambah-berita" method="post" enctype="multipart/form-data">
                    <div class="card-body">         
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="judul" id="judul" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" name="isi" id="editor1" rows="12"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                            <div class="col-sm-7">
                                <?php 
                                $sql_g = "SELECT `id_tag`,`tag` FROM `tag`
                                            ORDER BY `tag`";
                                $query_g = mysqli_query($koneksi, $sql_g);
                                        while($data_g = mysqli_fetch_row($query_g)){
                                        $id_tg = $data_g[0];
                                        $tg = $data_g[1];
                                        ?>
                                <input type="checkbox"  name="tag[]" value="<?php echo $id_tg;?>">  
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