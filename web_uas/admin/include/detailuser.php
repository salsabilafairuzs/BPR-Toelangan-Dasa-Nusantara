<?php 
if(isset($_GET['data'])){
	$id_user = $_GET['data'];
	//gat data user
    $sql = "SELECT `foto`, `nama`, `email`, `username`, `level` FROM `user` WHERE `id_user`='$id_user'";
    $query = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_row($query)){
        $foto = $data[0];
        $nama = $data[1];
        $email = $data[2];
        $username = $data[3];
        $level = $data[4];
    }
}
?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail User</h1>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php?include=user">User</a></li>
                <li class="breadcrumb-item active">Detail User</li>
            </ol>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row"> 
        <div class="col-lg-12 mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary fas fa-user"> <?php echo $nama;?></h6>
                </div>
                <div class="card-body d-flex">
                    <div class="col-lg-4 text-center">
                        <?php if (!empty($foto)) {?>
                            <img src="foto/<?php echo $foto;?>" class="img-fluid px-3 px-sm-4 mt-3 mb-4" width="200px;">
                        <?php }?>
                    </div>
                    <div class="col-lg-8 my-auto">
                        <label for="nama" class="font-weight-bold">Nama: <span class="font-weight-lighter"><?php echo $nama;?></span></label> <br>
                        <label for="email" class="font-weight-bold">Email: <span class="font-weight-lighter"><?php echo $email;?></span></label> <br>
                        <label for="username" class="font-weight-bold">Username: <span class="font-weight-lighter"><?php echo $username;?></span></label> <br>
                        <label for="level" class="font-weight-bold">Level: <span class="font-weight-lighter"><?php echo $level;?></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>