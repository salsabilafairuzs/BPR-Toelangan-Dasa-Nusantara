<?php 
$id_user = $_SESSION['id_user'];
//get profil
$sql = "select `nama`, `email`,`foto` from `user` 
where `id_user`='$id_user'";
 //echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_row($query)){
	$nama = $data[0];
	$email = $data[1];
	$foto = $data[2];
}
?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
        <a href="index.php?include=edit-profil" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-edit fa-sm text-white-50"></i> Edit Profil</a>
    </div>

    <div class="col-sm-12">
        <?php if(!empty($_GET['notif'])){
            if($_GET['notif']=="editberhasil"){?>
                <div class="alert alert-success bg-success text-white" role="alert">
                    Data Berhasil Diubah
                </div>
            <?php }?>
        <?php }?>
    </div>
    <!-- Content Row -->
    <div class="row"> 
        <div class="col-lg-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary fas fa-user-circle"> PROFIL</h6>
                </div>
                <div class="card-body d-flex">
                    <div class="col-lg-4 text-center">
                        <?php if (!empty($foto)) {?>
                            <img src="foto/<?php echo $foto;?>" class="img-fluid px-3 px-sm-4 mt-3 mb-4" width="200px;">
                        <?php }?>
                    </div>
                    <div class="col-lg-4 my-auto">
                        <label for="nama" class="font-weight-bold">Nama: <?php echo $nama;?></label> <br>
                        <label for="email" class="font-weight-bold">Email: <?php echo $email;?></label>
                    </div>
                </div>
            </div>
        </div>
    </div>