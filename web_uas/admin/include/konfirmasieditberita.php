<?php 
if(isset($_SESSION['id_berita'])){
    $id_berita = $_SESSION['id_berita'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tag = $_POST['tag'];
    $lokasi_file = $_FILES['cover']['tmp_name'];
    $nama_file = $_FILES['cover']['name'];
    $direktori = 'cover/'.$nama_file;
 
    //get cover 
    $sql_f = "SELECT `foto` FROM `berita` WHERE `id_berita`='$id_berita'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $cover = $data_f[0];
        //echo $foto;
    }
   
    if(empty($judul)){
	    header("Location:index.php?include=edit-berita&data=$id_berita&notif=editkosong
         &jenis=judul");
	}else if(empty($isi)){
	    header("Location:index.php?include=edit-berita&data=$id_berita&notif=editkosong
         &jenis=isi");
	}else if(empty($tag)){
	    header("Location:index.php?include=edit-berita&data=$id_berita&notif=editkosong
         &jenis=tag");
	}else{
         $lokasi_file = $_FILES['cover']['tmp_name'];
	   $nama_file = $_FILES['cover']['name'];
	   $direktori = 'cover/'.$nama_file;
	   if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($cover)){
                unlink("cover/$cover");
            }
	$sql = "UPDATE `berita` set `judul`='$judul', `isi`='$isi', `foto`='$nama_file'
	WHERE `id_berita`='$id_berita'";
	mysqli_query($koneksi,$sql);
}else{
	$sql = "UPDATE `berita` set `judul`='$judul',`isi`='$isi'
	WHERE `id_berita`='$id_berita'";
	mysqli_query($koneksi,$sql);
}
//hapus tag
$sql_d = "delete from `tag_berita` where `id_berita`='$id_berita'";
mysqli_query($koneksi,$sql_d);
//tambah tag
if(!empty($_POST['tag'])){
   foreach($_POST['tag'] as $id_tag){
	$sql_i = "insert into `tag_berita` (`id_berita`, `id_tag`) 
	values ('$id_berita', '$id_tag')";
	mysqli_query($koneksi,$sql_i);
	}
}
header("Location:index.php?include=berita&notif=editberhasil");
}
}

?>