<?php 
$profil = $_POST['profil'];
$isi = $_POST['isi'];
if(empty($profil)){
	header("Location:index.php?include=tambah-data-profil&notif=tambahkosong");
}elseif(empty($isi)){
    header("Location:index.php?include=tambah-data-profil&notif=tambahkosong");
}else{
	$sql = "insert into `profil` (`profil`, `isi`) 
	values ('$profil', '$isi')";
	mysqli_query($koneksi,$sql);
    header("Location:index.php?include=data-profil&notif=tambahberhasil");		
}
?>