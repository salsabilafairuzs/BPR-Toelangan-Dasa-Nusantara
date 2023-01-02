<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_laporan = $_GET['data'];
		//hapus data profil
		$sql_dh = "delete from `laporan` where `id_laporan` = '$id_laporan'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if (isset($_GET['aksi']) && isset($_POST['katakunci_laporan'])) {
    if ($_GET['aksi']=='cari') {
    $_SESSION['katakunci_laporan'] = $_POST['katakunci_laporan'];
    $katakunci_laporan = $_SESSION['katakunci_laporan'];
    }
}
if (isset($_SESSION['katakunci_laporan'])) {
    $katakunci_laporan = $_SESSION['katakunci_laporan'];
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Laporan</li>
        </ol>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
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
                <form class="form-inline mr-auto w-100 navbar-search" action="index.php?include=laporan&aksi=cari" method="post">
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
            <form class="d-none d-sm-inline-block form-inline mr-auto md-3 my-2 my-md-0 mw-100 navbar-search" action="index.php?include=laporan&aksi=cari" method="post">
                <div class="input-group">
                    <input type="text" id="kata_kunci" name="katakunci_laporan" class="form-control bg-light border-0 small" placeholder="Cari Data"
                    aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <a href="index.php?include=tambah-laporan" class="btn btn-xs btn-primary btn-icon-split float-right">
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
                        <th width="25%">Jenis Laporan</th>
                        <th width="25%">Nama Laporan</th>
                        <th width="15%">Tahun</th>
                        <th width="15%">File</th>
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
                    $sql_b = "SELECT `l`.`id_laporan`, `l`.`nama_laporan`, `l`.`tahun`, `l`.`file`,   
                            `j`.`jenis_laporan` FROM `laporan` `l` INNER JOIN `jenis_laporan` `j` ON `l`.`id_jenis_laporan` = `j`.`id_jenis_laporan` ";
                    if (isset($katakunci_laporan) && !empty($katakunci_laporan)) {
                        $sql_b .= " WHERE `l`.`nama_laporan` LIKE '%$katakunci_laporan%' || `j`.`jenis_laporan` LIKE '%$katakunci_laporan%' ";
                    }
                    $sql_b.=" ORDER BY `j`.`jenis_laporan`, `l`.`nama_laporan` limit $posisi, $batas";
                    $query_b = mysqli_query($koneksi,$sql_b);
                    $no = $posisi+1;
                    while($data_b = mysqli_fetch_row($query_b)){
                        $id_laporan = $data_b[0];
                        $nama_laporan = $data_b[1];
                        $tahun = $data_b[2];
                        $file = $data_b[3];
                        $jenis_laporan = $data_b[4];
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $jenis_laporan;?></td>
                        <td><?php echo $nama_laporan;?></td>
                        <td><?php echo $tahun;?></td>
                        <td><a href="file/<?php echo $file;?>"> <i class="fa fa-file-pdf" style="font-size:24px;"></i></a></td>
                        <td>
                        <a href="index.php?include=edit-laporan&data=<?php echo $id_laporan;?>" class="btn btn-sm btn-info btn-icon-split mb-2">
                            <span class="icon text-white-50">
                            <i class="fas fa-edit"></i> 
                            </span>
                            <span class="text">Edit</span>
                        </a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama_laporan; ?>?')) window.location.href = 'index.php?include=laporan&aksi=hapus&data=<?php echo $id_laporan;?>&notif=hapusberhasil'" class="btn btn-sm btn-icon-split btn-danger">
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
        $sql_jum = "SELECT `l`.`id_laporan`, `l`.`nama_laporan`, `l`.`tahun`, `l`.`file`,   
        `j`.`jenis_laporan` FROM `laporan` `l` INNER JOIN `jenis_laporan` `j` ON `l`.`id_jenis_laporan` = `j`.`id_jenis_laporan` "; 
        if (isset($katakunci_laporan)) {
          $sql_jum .= " WHERE `l`.`nama_laporan` LIKE '%$katakunci_laporan%' || `j`.`jenis_laporan` LIKE '%$katakunci_laporan%' ";
        }
        $sql_jum .= " ORDER BY `l`.`nama_laporan`, `j`.`jenis_laporan`";
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
                href='index.php?include=laporan&halaman=1'>First</a></li>";
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=laporan&halaman=$sebelum'>«</a></li>";
            }
            for($i=1; $i<=$jum_halaman; $i++){
                if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                    if($i!=$halaman){
                        echo "<li class='page-item'><a class='page-link' 
                        href='index.php?include=laporan&halaman=$i'>$i</a></li>";
                    }else{
                        echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                }
            }
            if($halaman!=$jum_halaman){
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=laporan&halaman=$setelah'>»</a></li>";
                echo "<li class='page-item'><a class='page-link' 
                href='index.php?include=laporan&halaman=$jum_halaman'>Last</a></li>";
            }      
        }?>
        </ul>
    </div>
</div>