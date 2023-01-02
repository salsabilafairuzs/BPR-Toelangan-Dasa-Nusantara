<?php 
if(isset($_SESSION['id_jenis_laporan'])){
    $id_jenis_laporan = $_SESSION['id_jenis_laporan'];
    $jenis_laporan = $_POST['jenis_laporan'];

    if(empty($jenis_laporan)){
        header("Location:index.php?include=edit-jenis-laporan&data=".$id_jenis_laporan."&notif=editkosong");
    }else{
	$sql = "update `jenis_laporan` set `jenis_laporan`='$jenis_laporan' where `id_jenis_laporan`='$id_jenis_laporan'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_jenis_laporan']);
	header("Location:index.php?include=jenis-laporan&notif=editberhasil");
    }
}
?>