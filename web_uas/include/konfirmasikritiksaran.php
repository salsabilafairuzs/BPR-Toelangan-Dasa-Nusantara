<?php 
// include('../koneksi/koneksi.php');
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$subjek = $_POST['subjek'];
$pekerjaan = $_POST['pekerjaan'];

$sql = "insert into `kritik_saran` (`nama`, `email`, `pesan`, `subjek`, `pekerjaan`) values ('$nama', '$email', '$pesan', '$subjek', '$pekerjaan')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=kontak&notif=pesanberhasil");
?>