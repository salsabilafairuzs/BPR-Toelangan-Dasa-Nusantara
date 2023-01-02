<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_berita = $_GET['data'];
		//hapus data profil
		$sql_dh = "delete from `berita` where `id_berita` = '$id_berita'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if (isset($_GET['aksi']) && isset($_POST['katakunci_berita'])) {
    if ($_GET['aksi']=='cari') {
    $_SESSION['katakunci_berita'] = $_POST['katakunci_berita'];
    $katakunci_berita = $_SESSION['katakunci_berita'];
    }
}
if (isset($_SESSION['katakunci_berita'])) {
    $katakunci_berita = $_SESSION['katakunci_berita'];
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Berita</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Berita</li>
        </ol>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
    </div>
    <div class="card-body">
        <div class="d-flex">
            <div class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" action="index.php?include=berita&aksi=cari" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            <form class="d-none d-sm-inline-block form-inline mr-auto md-3 my-2 my-md-0 mw-100 navbar-search" action="index.php?include=berita&aksi=cari" method="post">
                <div class="input-group">
                    <input type="text" id="kata_kunci" name="katakunci_berita" class="form-control bg-light border-0 small" placeholder="Cari Data"
                    aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <a href="index.php?include=tambah-berita" class="btn btn-xs btn-primary btn-icon-split float-right">
                <span class="icon text-white-50">
                <i class="fas fa-plus"></i>  
                </span>
                <span class="text">Tambah  Data</span>
            </a>
        </div>
        <div class="col-sm-12 mt-3">
            <?php if(!empty($_GET['notif'])){?>
                <?php if($_GET['notif']=="tambahberhasil"){?>
                    <div class="alert alert-success bg-success text-white" role="alert">
                    Data Berhasil Ditambahkan</div>
                <?php } else if($_GET['notif']=="editberhasil"){?>
                    <div class="alert alert-success bg-success text-white" role="alert">
                    Data Berhasil Diubah</div>
                <?php } else if($_GET['notif']=="hapusberhasil"){?>
                    <div class="alert alert-success bg-success text-white" role="alert">
                    Data Berhasil Dihapus</div>
                <?php }?>
            <?php }?>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="50%">Judul</th>
                        <th>Tanggal</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $batas = 2;
                    if(!isset($_GET['halaman'])){
                        $posisi = 0;
                        $halaman = 1;
                    }else{
                        $halaman = $_GET['halaman'];
                        $posisi = ($halaman-1) * $batas;
                    } 

                    $sql_k = "SELECT `id_berita`, `judul`, DATE_FORMAT(`tanggal`, '%d-%m-%Y') FROM `berita` ";
                    if (isset($katakunci_berita) && !empty($katakunci_berita)) {
                        $sql_k .= " WHERE `judul` LIKE '%$katakunci_berita%' ";
                    } 
                    $sql_k .="ORDER BY `judul` limit $posisi, $batas";
                    $query_k = mysqli_query($koneksi,$sql_k);
                    $no = $posisi+1;
                    while($data_k = mysqli_fetch_row($query_k)){
                        $id_berita = $data_k[0];
                        $judul = $data_k[1];
                        $tanggal = $data_k[2];
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $judul;?></td>
                        <td><?php echo $tanggal;?></td>
                        <td>
                        <a href="index.php?include=edit-berita&data=<?php echo $id_berita;?>" class="btn btn-sm btn-info btn-icon-split mb-2">
                            <span class="icon text-white-50">
                            <i class="fas fa-edit"></i> 
                            </span>
                            <span class="text">Edit</span>
                        </a>
                        <a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>" class="btn btn-sm btn-warning btn-icon-split mb-2" title="Detail">
                            <span class="icon text-white-50">
                                <i class="fas fa-eye"></i>
                            </span>
                            <span class="text">Detail</span>
                        </a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $judul; ?>?')) window.location.href = 'index.php?include=berita&aksi=hapus&data=<?php echo $id_berita;?>&notif=hapusberhasil'" class="btn btn-sm btn-icon-split btn-danger">
                            <span class="icon text-white-50">
                            <i class="fas fa-trash"></i> 
                            </span>
                            <span class="text">Hapus</span> 
                        </a>
                        </td>
                    </tr>
                    <?php $no++; }?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- card-body -->

    <?php
        //hitung jumlah semua data 
        $sql_jum = "select `id_berita`, `judul`, `tanggal` from `berita` "; 

        if (isset($katakunci_berita)) {
            $sql_jum .= " WHERE `judul` LIKE '%$katakunci_berita%' ";
        }
        $sql_jum .= "order by `judul`";
        $query_jum = mysqli_query($koneksi,$sql_jum);
        $jum_data = mysqli_num_rows($query_jum);
        $jum_halaman = ceil($jum_data/$batas);
    ?>
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
        <?php 
        if($jum_halaman==0){
        //tidak ada halaman
        }else if($jum_halaman==1){
            echo "<li class='page-item'><a class='page-link'>1</a></li>";
        }else{
            $sebelum = $halaman-1;
            $setelah = $halaman+1;
            if($halaman!=1){
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=berita&halaman=1'>First</a></li>";
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=berita&halaman=$sebelum'>«</a></li>";
            }
            for($i=1; $i<=$jum_halaman; $i++){
                if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                    if($i!=$halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='index.php?include=berita&halaman=$i'>$i</a></li>";
                    }else{
                        echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                }
            }
            if($halaman!=$jum_halaman){
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=berita&halaman=$setelah'>»</a></li>";
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=berita&halaman=$jum_halaman'>Last</a></li>";
            }      
        }?>
        </ul>
    </div>
</div>