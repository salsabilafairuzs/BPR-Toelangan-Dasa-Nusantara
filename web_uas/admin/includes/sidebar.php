<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <img src="assets/img/bprtdn.jpg" alt="" width="100px" style="border-radius:5px;">
    <!-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">BPR Toelangan</div> -->
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php?include=profil">
        <i class="fas fa-fw fa-user"></i>
        <span>Profil</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Data Master
</div>

<!-- Nav Item - Data Profil -->
<li class="nav-item">
    <a class="nav-link" href="index.php?include=data-profil">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Profil</span></a>
</li>

<!-- Nav Item - Data Berita -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Data Berita</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?include=berita">Berita</a>
            <a class="collapse-item" href="index.php?include=tag">Tag</a>
        </div>
    </div>
</li>

<!-- Nav Item - Data Produk -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-money-check"></i>
        <span>Data Produk</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?include=produk">Produk</a>
            <a class="collapse-item" href="index.php?include=jenis-produk">Jenis Produk</a>
        </div>
    </div>
</li>

<!-- Nav Item - Data laporan -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-clipboard"></i>
        <span>Data Laporan</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?include=laporan">Laporan</a>
            <a class="collapse-item" href="index.php?include=jenis-laporan">Jenis Laporan</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Data User
</div>

<!-- Nav Item - Data User -->
<?php 
    if (isset($_SESSION['level'])){
        if ($_SESSION['level']=="Superadmin"){?>
<li class="nav-item">
    <a class="nav-link" href="index.php?include=user">
        <i class="fas fa-fw fa-users"></i>
        <span>Pengaturan User</span></a>
</li>
<?php }}?>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="index.php?include=ubah-password">
        <i class="fas fa-fw fa-key"></i>
        <span>Ubah Password</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<li class="nav-item">
    <a class="nav-link" href="index.php?include=kritik-saran">
        <i class="fas fa-fw fa-comments"></i>
        <span>Kritik dan Saran</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->