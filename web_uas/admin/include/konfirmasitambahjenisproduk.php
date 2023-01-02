<?php 
$jenisproduk = $_POST['jenisproduk'];
if(empty($jenisproduk)){
	header("Location:index.php?include=tambah-jenis-produk&notif=tambahkosong");
}else{
	$sql = "insert into `jenis_produk` (`jenis_produk`) 
	values ('$jenisproduk')";
	mysqli_query($koneksi,$sql);
    header("Location:index.php?include=jenis-produk&notif=tambahberhasil");		
}
?>