<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Produk</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Produk</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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