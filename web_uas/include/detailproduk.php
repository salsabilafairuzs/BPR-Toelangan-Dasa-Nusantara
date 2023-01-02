<?php 
if (isset($_GET['data'])) {
    $id_produk= $_GET['data'];
    $sql_d = "SELECT `p`.`file`,`p`.`nama_produk`, `p`.`deskripsi`, `p`.`keunggulan`, `p`.`syarat`, `p`.`fitur`, `j`.`jenis_produk` FROM `produk` `p` INNER JOIN `jenis_produk` `j` ON `p`.`id_jenis_produk` = `j`.`id_jenis_produk` WHERE `id_produk`='$id_produk'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $file= $data_d[0];
        $nama_produk = $data_d[1];
        $deskripsi = $data_d[2];
        $keunggulan = $data_d[3];
        $syarat = $data_d[4];
        $fitur = $data_d[5];
        $jenis_produk = $data_d[6];
    }}
?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown"><?php echo $nama_produk?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <p><?php echo $deskripsi?>
                </p>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" position-relative overflow-hidden p-5 pe-0">
                        <h1 class="display-5 mb-4">01 Keunggulan</h1>
                        <p><?php echo $keunggulan?></p>
                    <h1 class="display-5 mb-4">02 Syarat dan Ketentuan</h1>
                    <p><?php echo $syarat?></p>
                    <?php 
                    if (!empty($fitur)) {
                    ?>
                        <h1 class="display-5 mb-4">03 Fitur</h1>
                        <p><?php echo $fitur?></p>
                    <?php }?>
                    </div>
                </div>
                <?php 
                if ($jenis_produk == "Deposito") {
                ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h3 class="display-5 mb-4">Investasikan uang anda dengan tepat</h3>
                    <p class="mb-4">Produk deposito dirancang untuk keuntungan dan kemudahan nasabah</p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 mt-3" href="admin/file/<?php echo $file?>">Unduh Form Pengajuan</a>
                </div>
                <?php 
                }elseif ($jenis_produk == "Tabungan") {
                ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h3 class="display-5 mb-4">Menabung sejak dini dengan <?php echo $nama_produk?></h3>
                    <p class="mb-4">Rasakan berbagai keuntungan menarik dari product <?php echo $nama_produk?></p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 mt-3" href="admin/file/<?php echo $file?>">Unduh Form Pengajuan</a>
                </div>
                <?php 
                }else {
                ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h3 class="display-5 mb-4">Solusi tepat untuk kebutuhan Anda</h3>
                    <p class="mb-4">Tentukan jenis pinjaman anda, cepat, mudah, dan aman </p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 mt-3" href="admin/file/<?php echo $file?>">Unduh Form Pengajuan</a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- About End -->

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
    