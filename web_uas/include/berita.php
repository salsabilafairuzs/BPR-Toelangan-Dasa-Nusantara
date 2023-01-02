 <!-- Page Header Start -->
 <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Berita</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Berita</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Berita</h1>
            </div>
            <div class="row g-4">
              <?php 
                $sql_b = "SELECT `b`.`id_berita`, `b`.`judul`, `b`.`foto`,  DATE_FORMAT(`b`.`tanggal`, '%d-%m-%Y'), `u`.`nama` FROM `berita` `b` INNER JOIN `user` `u` ON `b`.`id_user` = `u`.`id_user` ORDER BY `b`.`tanggal` DESC LIMIT 3";
                //echo $sql_b;
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                  $id_berita = $data_b[0];
                  $judul_berita = $data_b[1];
                  $cover = $data_b[2];
                  $tanggal = $data_b[3];
                  $penulis = $data_b[4];
              ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="admin/cover/<?php echo $cover;?>" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="index.php?include=detail-berita&data=<?php echo $id_berita;?>" class="navbar-brand ms-4 ms-lg-0"><?php echo $judul_berita;?></a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-dark me-2"></i><?php echo $penulis;?></small>
                            <small class="me-3"><i class="fa fa-calendar text-dark me-2"></i><?php echo $tanggal;?></small>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- Blog End -->