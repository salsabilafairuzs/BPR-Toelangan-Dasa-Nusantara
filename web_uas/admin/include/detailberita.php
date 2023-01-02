<?php 
if(isset($_GET['data'])){
	$id_berita = $_GET['data'];
	//gat data berita
  $sql = "SELECT `b`.`foto`, DATE_FORMAT(`b`.`tanggal`, '%d-%m-%Y'),`b`.`judul`, `u`.`nama`,`b`.`isi` FROM `berita` `b` INNER JOIN `user` `u` ON `b`.`id_user`= `u`.`id_user` WHERE `b`.`id_berita`='$id_berita'";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $cover = $data[0];
    $tanggal = $data[1];
    $judul = $data[2];
    $penulis = $data[3];
    $isi = $data[4];
  }
}
?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Berita</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php?include=berita">Berita</a></li>
                <li class="breadcrumb-item active">Detail Berita</li>
            </ol>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row"> 
        <div class="col-lg-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary fas fa-information"> <?php echo $judul;?></h6>
                </div>
                <div class="card-body d-flex">
                    <div class="col-lg-4 text-center">
                        <?php if (!empty($cover)) {?>
                            <img src="cover/<?php echo $cover;?>" class="img-fluid px-3 px-sm-4 mt-3 mb-4" width="300px;">
                        <?php }?>
                    </div>
                    <div class="col-lg-8 my-auto">
                        <label for="judul" class="font-weight-bold">Judul Berita: <span class="font-weight-lighter"><?php echo $judul;?></span></label> <br>
                        <label for="isi" class="font-weight-bold">Isi Berita: <span class="font-weight-lighter"><?php echo $isi;?></span></label> <br>
                        <label for="penulis" class="font-weight-bold">Penulis: <span class="font-weight-lighter"><?php echo $penulis;?></span></label> <br>
                        <label for="tanggal" class="font-weight-bold">Tag: </label>
                        <?php
                        //get tag
                        $sql_h = "SELECT `t`.`tag` from `tag_berita` `tb` inner join `tag` `t`  ON  `tb`.`id_tag` = `t`.`id_tag` where `tb`.`id_berita`='$id_berita'";
                        $query_h = mysqli_query($koneksi,$sql_h);
                        while($data_h = mysqli_fetch_row($query_h)){
                        $tag= $data_h[0];
                        ?>
                        <span class="font-weight-lighter"><?php echo $tag;?>, </span> 
                        <?php }?>
                        <br>
                        <label for="tanggal" class="font-weight-bold">Tanggal: <span class="font-weight-lighter"><?php echo $tanggal;?></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>