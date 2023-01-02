<?php
session_start();
include('../koneksi/koneksi.php');
if (isset($_GET["include"])) {
    $include = $_GET["include"];
    if ($include=="konfirmasi-login") {
        include('include/konfirmasilogin.php');
    }elseif ($include=="logout") {
        include("include/logout.php");
    }else if($include=="konfirmasi-edit-profil"){
        include("include/konfirmasieditprofil.php");
    }else if($include=="konfirmasi-tambah-data-profil"){
        include("include/konfirmasitambahdataprofil.php");
    }else if($include=="konfirmasi-edit-data-profil"){
        include("include/konfirmasieditdataprofil.php");
    }else if($include=="konfirmasi-tambah-berita"){
        include("include/konfirmasitambahberita.php");
    }else if($include=="konfirmasi-edit-berita"){
        include("include/konfirmasieditberita.php");
    }else if($include=="konfirmasi-tambah-tag"){
        include("include/konfirmasitambahtag.php");
    }else if($include=="konfirmasi-edit-tag"){
        include("include/konfirmasiedittag.php");
    }else if($include=="konfirmasi-tambah-jenis-laporan"){
        include("include/konfirmasitambahjenislaporan.php");
    }else if($include=="konfirmasi-edit-jenis-laporan"){
        include("include/konfirmasieditjenislaporan.php");
    }else if($include=="konfirmasi-tambah-jenis-produk"){
        include("include/konfirmasitambahjenisproduk.php");
    }else if($include=="konfirmasi-edit-jenis-produk"){
        include("include/konfirmasieditjenisproduk.php");
    }else if($include=="konfirmasi-tambah-produk"){
        include("include/konfirmasitambahproduk.php");
    }else if($include=="konfirmasi-edit-produk"){
        include("include/konfirmasieditproduk.php");
    }else if($include=="konfirmasi-tambah-laporan"){
        include("include/konfirmasitambahlaporan.php");
    }else if($include=="konfirmasi-edit-laporan"){
        include("include/konfirmasieditlaporan.php");
    }else if($include=="konfirmasi-tambah-user"){
        include("include/konfirmasitambahuser.php");
    }else if($include=="konfirmasi-edit-user"){
        include("include/konfirmasiedituser.php");
    }else if($include=="konfirmasi-ubah-password"){
        include("include/konfirmasiubahpass.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php") ?>
</head>
<?php
if (isset($_GET["include"])) {
    $include = $_GET["include"];
    if (isset($_SESSION['id_user'])) {
?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include("includes/sidebar.php") ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include("includes/navbar.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    if ($include=="edit-profil") {
                        include("include/editprofil.php");
                    }elseif($include=="data-profil"){
                        include("include/dataprofil.php");
                    }elseif($include=="tambah-data-profil"){
                        include("include/tambahdataprofil.php");
                    }elseif($include=="edit-data-profil"){
                        include("include/editdataprofil.php");
                    }elseif($include=="berita"){
                        include("include/berita.php");
                    }elseif($include=="tambah-berita"){
                        include("include/tambahberita.php");
                    }elseif($include=="edit-berita"){
                        include("include/editberita.php");
                    }elseif($include=="detail-berita"){
                        include("include/detailberita.php");
                    }elseif($include=="tag"){
                        include("include/tag.php");
                    }elseif($include=="tambah-tag"){
                        include("include/tambahtag.php");
                    }elseif($include=="edit-tag"){
                        include("include/edittag.php");
                    }elseif($include=="jenis-laporan"){
                        include("include/jenislaporan.php");
                    }elseif($include=="tambah-jenis-laporan"){
                        include("include/tambahjenislaporan.php");
                    }elseif($include=="edit-jenis-laporan"){
                        include("include/editjenislaporan.php");
                    }elseif($include=="jenis-produk"){
                        include("include/jenisproduk.php");
                    }elseif($include=="tambah-jenis-produk"){
                        include("include/tambahjenisproduk.php");
                    }elseif($include=="edit-jenis-produk"){
                        include("include/editjenisproduk.php");
                    }elseif($include=="produk"){
                        include("include/produk.php");
                    }elseif($include=="tambah-produk"){
                        include("include/tambahproduk.php");
                    }elseif($include=="edit-produk"){
                        include("include/editproduk.php");
                    }elseif($include=="detail-produk"){
                        include("include/detailproduk.php");
                    }elseif($include=="laporan"){
                        include("include/laporan.php");
                    }elseif($include=="tambah-laporan"){
                        include("include/tambahlaporan.php");
                    }elseif($include=="edit-laporan"){
                        include("include/editlaporan.php");
                    }elseif($include=="user"){
                        include("include/user.php");
                    }elseif($include=="tambah-user"){
                        include("include/tambahuser.php");
                    }elseif($include=="edit-user"){
                        include("include/edituser.php");
                    }elseif($include=="detail-user"){
                        include("include/detailuser.php");
                    }elseif($include=="ubah-password"){
                        include("include/ubahpass.php");
                    }elseif($include=="kritik-saran"){
                        include("include/kritikdansaran.php");
                    }else {
                        include("include/profiluser.php");
                    }
                    ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include("includes/footer.php") ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin akan keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda ingin keluar dari sesi sekarang.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php?include=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/script.php") ?>
</body>
<?php
    }else{
        include("include/login.php");
    }
}else{
    if (isset($_SESSION['id_user'])) {
    ?>
    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include("includes/sidebar.php") ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include("includes/navbar.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                        include("include/profiluser.php");
                    ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include("includes/footer.php") ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php?include=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/script.php") ?>
    </body>
    <?php
    }else{
        include("include/login.php");
    }
}
?>
</html>