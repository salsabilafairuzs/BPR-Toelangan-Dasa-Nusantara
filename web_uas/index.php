<?php 
    include("koneksi/koneksi.php");
    if (isset($_GET["include"])) {
        $include = $_GET["include"];
        if ($include=="konfirmasi-kritik-saran") {
            include('include/konfirmasikritiksaran.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php") ?>
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <?php include("includes/navbar.php") ?>

    <?php
    if (isset($_GET["include"])) {
        $include = $_GET["include"];
        if($include=="laporan"){
            include("include/laporan.php");
        }elseif ($include =="profil") {
            include("include/profil.php");
        }elseif ($include =="produk") {
            include("include/produk.php");
        }elseif ($include =="kontak") {
            include("include/kontak.php");
        }elseif ($include =="laporan-publikasi") {
            include("include/laporanpublikasi.php");
        }elseif ($include =="laporan-tata-kelola") {
            include("include/laporanGCG.php");
        }elseif ($include =="deposito") {
            include("include/deposito.php");
        }elseif ($include =="tabungan-sidoel") {
            include("include/tabungansidoel.php");
        }elseif ($include =="tabungan-tanaman") {
            include("include/tabungan-tanaman.php");
        }elseif ($include =="simpanan-pelajar") {
            include("include/simpananpelajar.php");
        }elseif ($include =="kredit") {
            include("include/kredit.php");
        }elseif ($include =="berita") {
            include("include/berita.php");
        }elseif ($include =="detail-berita") {
            include("include/detailberita.php");
        }elseif ($include =="detail-produk") {
            include("include/detailproduk.php");
        }
    }else{
        include("include/beranda.php");
    }
    ?>

    <?php include("includes/footer.php") ?>
    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <?php include("includes/script.php") ?>
</body>
</html>