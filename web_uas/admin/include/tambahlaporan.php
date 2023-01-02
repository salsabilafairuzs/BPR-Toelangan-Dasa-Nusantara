<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?include=laporan">Laporan</a></li>
            <li class="breadcrumb-item active">Tambah Laporan</li>
        </ol>
    </div>
</div>

<!-- Content Row -->
<div class="row"> 
        <div class="col-sm-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary far fa-list-alt"> Form Tambah Laporan</h6>
                    <a href="index.php?include=laporan" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
                <br>
                <div class="col-sm-10">
                <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
                    <?php if($_GET['notif']=="tambahkosong"){?>
                        <div class="alert alert-danger bg-danger" role="alert">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
                    <?php }?>
                <?php }?>
                </div>
                <form class="form-horizontal" action="index.php?include=konfirmasi-tambah-laporan" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="jenis_laporan" class="col-sm-2 col-form-label">Jenis laporan</label>
                        <div class="col-sm-8">
                        <select class="form-control" id="jenis_laporan" name="jenis_laporan">
                        <option value="">- Pilih Jenis Laporan -</option>
                        <?php 
                        $sql_k = "SELECT `id_jenis_laporan`,`jenis_laporan` FROM `jenis_laporan` ORDER BY `jenis_laporan`";
                        $query_k = mysqli_query($koneksi, $sql_k);
                        while($data_k = mysqli_fetch_row($query_k)){
                                $id_jenis = $data_k[0];
                                $jenis = $data_k[1];
                        ?>
                        <option value="<?php echo $id_jenis;?>"><?php echo $jenis;?></option>
                        <?php }?>
                        </select>
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="nama_laporan" class="col-sm-2 col-form-label">Nama Laporan</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_laporan" id="nama_laporan" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-8">
                            <input type="number" class="form-control" name="tahun" id="tahun" value="">
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