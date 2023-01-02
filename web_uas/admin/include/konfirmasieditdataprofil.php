<?php 
if(isset($_SESSION['id_profil'])){
    $id_profil = $_SESSION['id_profil'];
    $profil = $_POST['profil'];
    $isi = $_POST['isi'];

    if(empty($profil)){
        header("Location:index.php?include=edit-data-profil&data=".$id_profil."&notif=editkosong");
    }elseif(empty($isi)){
        header("Location:index.php?include=edit-data-profil&data=".$id_profil."&notif=editkosong");
    }else{
	$sql = "update `profil` set `profil`='$profil', `isi`='$isi' where `id_profil`='$id_profil'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_profil']);
	header("Location:index.php?include=data-profil&notif=editberhasil");
    }
}
?>