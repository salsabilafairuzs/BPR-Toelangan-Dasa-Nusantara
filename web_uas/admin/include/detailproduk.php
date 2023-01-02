<?php 
if(isset($_GET['data'])){
	$id_produk = $_GET['data'];
	//gat data berita
  $sql = "SELECT `j`.`jenis_produk`, `p`.`nama_produk`, `p`.`deskripsi`, `p`.`keunggulan`,`p`.`syarat`, `p`.`fitur`,`p`.`file` FROM `produk` `p` INNER JOIN `jenis_produk` `j` ON `p`.`id_jenis_produk` = `j`.`id_jenis_produk` WHERE `p`.`id_produk`='$id_produk'";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $id_jenis_produk= $data[0];
	$nama_produk = $data[1];
	$deskripsi = $data[2];
    $keunggulan = $data[3];
    $syarat = $data[4];
    $fitur = $data[5];
    $file = $data[6];
  }
}
?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Produk</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php?include=produk">Produk</a></li>
                <li class="breadcrumb-item active">Detail Produk</li>
            </ol>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row"> 
        <div class="col-lg-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary fas fa-information"> <?php echo $nama_produk;?></h6>
                </div>
                <div class="card-body d-flex">
                    <div class="col-lg-12 mx-auto my-auto">
                        <label for="nama_produk" class="font-weight-bold">Nama Produk: <span class="font-weight-lighter"><?php echo $nama_produk;?></span></label> <br>
                        <label for="jenis_produk" class="font-weight-bold">Jenis Produk: <span class="font-weight-lighter"><?php echo $id_jenis_produk;?></span></label> <br>
                        <label for="deskripsi" class="font-weight-bold">Deskripsi: <span class="font-weight-lighter"><?php echo $deskripsi;?></span></label> <br>
                        <label for="keunggulan" class="font-weight-bold">Keunggulan: <span class="font-weight-lighter"><?php echo $keunggulan;?></span></label> <br>
                        <label for="syarat" class="font-weight-bold">Syarat: <span class="font-weight-lighter"><?php echo $syarat;?></span></label> <br>
                        <label for="fitur" class="font-weight-bold">Fitur: <span class="font-weight-lighter"><?php echo $fitur;?></span></label> <br>
                        <label for="file" class="font-weight-bold">File: </label>
                        <?php if (!empty($file)) {?>
                            <a href="file/<?php echo $file;?>"> <i class="fa fa-file-pdf" style="font-size:20px;"></i></i></a>
                        <?php }?>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>