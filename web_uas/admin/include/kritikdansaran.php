<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_kritik_saran = $_GET['data'];
		//hapus data profil
		$sql_dh = "delete from `kritik_saran` where `id_kritik_saran` = '$id_kritik_saran'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if (isset($_GET['aksi']) && isset($_POST['katakunci_kritiksaran'])) {
    if ($_GET['aksi']=='cari') {
    $_SESSION['katakunci_kritiksaran'] = $_POST['katakunci_kritiksaran'];
    $katakunci_kritiksaran = $_SESSION['katakunci_kritiksaran'];
    }
}
if (isset($_SESSION['katakunci_kritiksaran'])) {
    $katakunci_kritiksaran = $_SESSION['katakunci_kritiksaran'];
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Feedback</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Feedback</li>
        </ol>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Feedback</h6>
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
                <form class="form-inline mr-auto w-100 navbar-search" action="index.php?include=kritik-saran&aksi=cari" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Cari Data" aria-label="Search"
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
            <form class="d-none d-sm-inline-block form-inline mr-auto md-3 my-2 my-md-0 mw-100 navbar-search" action="index.php?include=kritik-saran&aksi=cari" method="post">
                <div class="input-group">
                    <input type="text" id="kata_kunci" name="katakunci_kritiksaran" class="form-control bg-light border-0 small" placeholder="Cari Data"
                    aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="col-sm-12 mt-3">
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
        </div> -->
        <div class="table-responsive mt-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
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

                    $sql_k = "SELECT `id_kritik_saran`, `nama`, `subjek`, `pesan` FROM `kritik_saran` ";
                    if (isset($katakunci_kritiksaran) && !empty($katakunci_kritiksaran)) {
                        $sql_k .= " WHERE `nama` LIKE '%$katakunci_kritiksaran%' ";
                    } 
                    $sql_k .="ORDER BY `nama` limit $posisi, $batas";
                    $query_k = mysqli_query($koneksi,$sql_k);
                    $no = $posisi+1;
                    while($data_k = mysqli_fetch_row($query_k)){
                        $id_kritik_saran= $data_k[0];
                        $nama = $data_k[1];
                        $subjek = $data_k[2];
                        $pesan = $data_k[3];
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $nama;?></td>
                        <td><?php echo $subjek;?></td>
                        <td><?php echo $pesan;?></td>
                        <td>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $pesan; ?>?')) window.location.href = 'index.php?include=kritik-saran&aksi=hapus&data=<?php echo $id_kritik_saran;?>&notif=hapusberhasil'" class="btn btn-sm btn-icon-split btn-danger">
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
        $sql_jum = "select `id_kritik_saran`, `nama`, `subjek`, `pesan` from `kritik_saran` "; 

        if (isset($katakunci_kritiksaran)) {
            $sql_jum .= " WHERE `nama` LIKE '%$katakunci_kritiksaran%' ";
        }
        $sql_jum .= "order by `nama`";
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
                href='index.php?include=kritik-saran&halaman=1'>First</a></li>";
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=kritik-saran&halaman=$sebelum'>«</a></li>";
            }
            for($i=1; $i<=$jum_halaman; $i++){
                if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                    if($i!=$halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='index.php?include=kritik-saran&halaman=$i'>$i</a></li>";
                    }else{
                        echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                }
            }
            if($halaman!=$jum_halaman){
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=kritik-saran&halaman=$setelah'>»</a></li>";
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=kritik-saran&halaman=$jum_halaman'>Last</a></li>";
            }      
        }?>
        </ul>
    </div>
</div>