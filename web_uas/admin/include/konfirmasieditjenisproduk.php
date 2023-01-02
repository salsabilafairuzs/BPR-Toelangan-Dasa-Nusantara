<?php 
if(isset($_SESSION['id_jenis_produk'])){
    $id_jenis_produk = $_SESSION['id_jenis_produk'];
    $jenis_produk = $_POST['jenis_produk'];

    if(empty($jenis_produk)){
        header("Location:index.php?include=edit-jenis-produk&data=".$id_jenis_produk."&notif=editkosong");
    }else{
	$sql = "update `jenis_produk` set `jenis_produk`='$jenis_produk' where `id_jenis_produk`='$id_jenis_produk'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_jenis_produk']);
	header("Location:index.php?include=jenis-produk&notif=editberhasil");
    }
}
?>