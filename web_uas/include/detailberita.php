<?php 
if (isset($_GET['data'])) {
  $id_berita = $_GET['data'];
  $sql_d = "SELECT `b`.`foto`,`b`.`judul`, `b`.`isi`,  DATE_FORMAT(`b`.`tanggal`, '%d-%m-%Y'),`u`.`nama` FROM `berita` `b` INNER JOIN `user` `u` ON `b`.`id_user`=`u`.`id_user` WHERE `b`.`id_berita`='$id_berita'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while($data_d = mysqli_fetch_row($query_d)){
    $foto = $data_d[0];
    $judul_berita = $data_d[1];
    $isi = $data_d[2];
    $tanggal = $data_d[3];
    $penulis = $data_d[4];

    //get tag
    $array_idtag = array();
    $array_tag = array();
    $sql_tb = "SELECT `tb`.`id_tag`, `t`.`tag` from `tag_berita` `tb` inner join `tag` `t`  ON  `tb`.`id_tag` = `t`.`id_tag` where `tb`.`id_berita`='$id_berita'";
    $query_tb = mysqli_query($koneksi,$sql_tb);
    while($data_tb = mysqli_fetch_row($query_tb)){
      $array_idtag[] = $data_tb[0];
      $array_tag[] = $data_tb[1];
    }
  }}
?>
 <!-- Page Header Start -->
 <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Berita</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="index.php?">Berita</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Berita</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Berita -->
    <div class="container py-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text">
            <div class="row justify-content">
                <div class="col-lg-12">
                    <i class="display-1 text-center text-primary"></i>
                    <h1><?php echo $judul_berita;?></h1>
                    <div class="text-muted border-top pt-4 mb-3">
                        <small class="me-3"><i class="fa fa-user text-dark me-2"></i><?php echo $penulis;?></small>
                        <small class="me-3"><i class="fa fa-calendar text-dark me-2"></i><?php echo $tanggal;?></small>
                    </div>
                    <img class="img-fluid" src="admin/cover/<?php echo $foto;?>" alt="">
                    <br><br>
                    <p><?php echo $isi;?></p>
                    <label for="tanggal" class="font-weight-bold">Tag: </label>
                        <?php
                        //get tag
                        $sql_h = "SELECT `t`.`tag` from `tag_berita` `tb` inner join `tag` `t`  ON  `tb`.`id_tag` = `t`.`id_tag` where `tb`.`id_berita`='$id_berita'";
                        $query_h = mysqli_query($koneksi,$sql_h);
                        while($data_h = mysqli_fetch_row($query_h)){
                        $tag= $data_h[0];
                        ?>
                        <span class="font-weight-bolder"><b><?php echo $tag;?>,</b></span> 
                        <?php }?>
                        <br><br>
                    <a class="btn btn-dark rounded-pill py-3 px-5" href="index.php?include=berita">Go Back</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Berita -->