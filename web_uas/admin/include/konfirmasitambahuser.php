<?php 
// include('../koneksi/koneksi.php');
$nama = $_POST['nama'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];
$direktori = 'foto/'.$nama_file;
$username = mysqli_real_escape_string($koneksi, $user);
$password = mysqli_real_escape_string($koneksi, MD5($pass));

if(empty($nama)){
	header("Location:index.php?include=tambah-user&notif=tambahkosong");
}else if(empty($email)){
	header("Location:index.php?include=tambah-user&notif=tambahkosong");
}else if(empty($user)){
	header("Location:index.php?include=tambah-user&notif=tambahkosong");
}else if(empty($pass)){
	header("Location:index.php?include=tambah-user&notif=tambahkosong");
}else if(empty($level)){
	header("Location:index.php?include=tambah-user&notif=tambahkosong");
}else{
	$sql = "insert into `user` (`nama`, `email`, `username`, `password`, `level`, `foto`) values ('$nama', '$email', '$username', '$password', '$level', '$nama_file')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=user&notif=tambahuserberhasil");	
}
?>
