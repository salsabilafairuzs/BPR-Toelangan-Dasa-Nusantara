<?php 
$jenislaporan = $_POST['jenislaporan'];
if(empty($jenislaporan)){
	header("Location:index.php?include=tambah-jenis-laporan&notif=tambahkosong");
}else{
	$sql = "insert into `jenis_laporan` (`jenis_laporan`) 
	values ('$jenislaporan')";
	mysqli_query($koneksi,$sql);
    header("Location:index.php?include=jenis-laporan&notif=tambahberhasil");		
}
?>