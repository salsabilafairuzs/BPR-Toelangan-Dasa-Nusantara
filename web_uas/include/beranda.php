<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/header-11.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-3 mb-5 ms-5 animated slideInDown">Temukan Solusi Perbankan Anda</h1>
                                    <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                                        <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="#about">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/header-11.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 ms-5 animated slideInDown">Pilihan Terbaik Untuk Anda</h1>
                                    <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                                        <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="#produk">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center" id="about">
            <?php 
                $sql_b = "SELECT `profil`, `isi` FROM `profil` WHERE `id_profil` = '1'";
                //echo $sql_b;
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                    $profil = $data_b[0];
                    $isi = $data_b[1];
                }
              ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $profil;?></h1>
                    <p class="mb-4"><?php echo $isi;?></p>
                    <p><i class="fa fa-check text-dark me-3"></i>Trust (Kepercayaan)</p>
                    <p><i class="fa fa-check text-dark me-3"></i>Integrity (Kejujuran)</p>
                    <p><i class="fa fa-check text-dark me-3"></i>Prudent (Kehati-hatian)</p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 mt-3" href="index.php?include=profil" class="navbar-brand ms-4 ms-lg-0">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Features</h1>
            </div>
            <div class="row g-4">
            <?php 
                $sql_b = "SELECT `profil`,`isi` FROM `profil`  WHERE `id_profil` = '6'";
                //echo $sql_b;
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                    $profil= $data_b[0];
                    $isi = $data_b[1];
                }
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/cepat.jpeg" alt="">
                        <h4 class="mb-3"><?php echo $profil;?></h4>
                        <p class="mb-4"><?php echo $isi;?>
                        </p>
                    </div>
                </div>
                <?php 
                $sql_b = "SELECT `profil`,`isi` FROM `profil`  WHERE `id_profil` = '7'";
                //echo $sql_b;
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                    $profil= $data_b[0];
                    $isi = $data_b[1];
                }
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/aman.jpeg" alt="">
                        <h4 class="mb-3"><?php echo $profil;?></h4>
                        <p class="mb-4"><?php echo $isi;?>
                        </p>
                    </div>
                </div>
                <?php 
                $sql_b = "SELECT `profil`,`isi` FROM `profil`  WHERE `id_profil` = '8'";
                //echo $sql_b;
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                    $profil= $data_b[0];
                    $isi = $data_b[1];
                }
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/peduli.jpeg" alt="">
                        <h4 class="mb-3"><?php echo $profil;?></h4>
                        <p class="mb-4"><?php echo $isi;?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container" id="produk">
                <div class="section-header text-center mb-5 wow fadeInUp mx-auto" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Produk Kami</h1>
                    <p>BPR Toelangan Dasa Nusantara  memiliki berbagai produk finansial yang dirancang sesuai dengan kebutuhan Anda. Produk finansial tersebut berupa deposito, tabungan, dan kredit</p>
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-dark border-2" data-bs-toggle="pill" href="#tab-1">Deposito</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-dark border-2 active" data-bs-toggle="pill" href="#tab-2">Tabungan</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-dark border-2" data-bs-toggle="pill" href="#tab-3">Kredit</a>
                        </li>
                    </ul>
                </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0">
                    <div class="row g-4">
                    <?php 
                            $sql_b = "SELECT `p`.`id_produk`, `p`.`nama_produk`, `p`.`deskripsi` FROM `produk` `p` INNER JOIN `jenis_produk` `j` ON `p`.`id_jenis_produk` = `j`.`id_jenis_produk` WHERE `j`.`jenis_produk` = 'deposito'";
                            //echo $sql_b;
                            $query_b = mysqli_query($koneksi,$sql_b);
                            while($data_b = mysqli_fetch_row($query_b)){
                                $id_produk= $data_b[0];
                                $nama_produk = $data_b[1];
                                $deskripsi = $data_b[2];
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp mx-auto" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/deposito.jpeg" alt="">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""><?php echo $nama_produk?></a>
                                    <span class="text-dark me-1"><?php echo $deskripsi?></span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-100 text-center border-end py-3">
                                        <a class="text-body" href="index.php?include=detail-produk&data=<?php echo $id_produk?>" class="navbar-brand ms-4 ms-lg-0"><i class="fa fa-eye text-dark me-1"></i>View detail</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php 
                            $sql_b = "SELECT `p`.`id_produk`, `p`.`nama_produk`, `p`.`deskripsi` FROM `produk` `p` INNER JOIN `jenis_produk` `j` ON `p`.`id_jenis_produk` = `j`.`id_jenis_produk` WHERE `j`.`jenis_produk` = 'tabungan'";
                            //echo $sql_b;
                            $query_b = mysqli_query($koneksi,$sql_b);
                            while($data_b = mysqli_fetch_row($query_b)){
                                $id_produk= $data_b[0];
                                $nama_produk = $data_b[1];
                                $deskripsi = $data_b[2];
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 mx-auto ">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/tabungan.jpeg" alt="">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""><?php echo $nama_produk?></a>
                                    <span class="text-dark me-1"><?php echo $deskripsi?></span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-100 text-center border-end py-3">
                                        <a class="text-body" href="index.php?include=detail-produk&data=<?php echo $id_produk?>" class="navbar-brand ms-4 ms-lg-0"><i class="fa fa-eye text-dark me-2"></i>View detail</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                    <?php 
                            $sql_b = "SELECT `p`.`id_produk`, `p`.`nama_produk`, `p`.`deskripsi` FROM `produk` `p` INNER JOIN `jenis_produk` `j` ON `p`.`id_jenis_produk` = `j`.`id_jenis_produk` WHERE `j`.`jenis_produk` = 'kredit'";
                            //echo $sql_b;
                            $query_b = mysqli_query($koneksi,$sql_b);
                            while($data_b = mysqli_fetch_row($query_b)){
                                $id_produk= $data_b[0];
                                $nama_produk = $data_b[1];
                                $deskripsi = $data_b[2];
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 mx-auto">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/kredit.jpeg" alt="">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""><?php echo $nama_produk?></a>
                                    <span class="text-dark me-1"><?php echo $deskripsi?>
                                    </span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-100 text-center border-end py-3">
                                        <a class="text-body" href="index.php?include=detail-produk&data=<?php echo $id_produk?>" class="navbar-brand ms-4 ms-lg-0"><i class="fa fa-eye text-dark me-2"></i>View detail</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Testimoni</h1>
                <p>Dalam pelayanan dan produk, kami senantiasa berusaha menciptakan dampak positif pada seluruh nasabah. Kepuasan pelanggan merupakan elemen penting yang terintegrasi dalam model bisnis kami</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php 
                $sql_b = "SELECT `pesan`, `nama`, `pekerjaan` FROM `kritik_saran` WHERE `subjek` = 'testimoni'";
                //echo $sql_b;
                $query_b = mysqli_query($koneksi,$sql_b);
                while($data_b = mysqli_fetch_row($query_b)){
                    $pesan= $data_b[0];
                    $nama = $data_b[1];
                    $pekerjaan = $data_b[2];
            ?>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-dark position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4"><?php echo $pesan?></p>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <h5 class="mb-1"><?php echo $nama?></h5>
                            <span><?php echo $pekerjaan?></span>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Informasi Terkini</h1>
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
            <div class="row">
                <small class="w-100 text-center border-end py-3">
                    <a class="btn btn-outline-dark border-2" href="index.php?include=berita">Berita Lainnya</a>
                </small>
            </div>
        </div>
    </div>
    <!-- Blog End -->