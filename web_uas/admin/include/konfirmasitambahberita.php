<?php 
   if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];
   }
   $judul = $_POST['judul'];
   $isi = $_POST['isi'];
   $tag = $_POST['tag'];
   $lokasi_file = $_FILES['cover']['tmp_name'];
   $nama_file = $_FILES['cover']['name'];
   $direktori = 'cover/'.$nama_file;
 
   if(empty($judul)){
	header("Location:index.php?include=tambah-berita&notif=tambahkosong&
      jenis=judul");
   }else if(empty($isi)){
      header("Location:index.php?include=tambah-berita&notif=tambahkosong&
         jenis=isi");
      }else if(empty($tag)){
	header("Location:index.php?include=tambah-berita&notif=tambahkosong&
      jenis=tag");
   }else if(!move_uploaded_file($lokasi_file,$direktori)){
      header("Location:index.php?include=tambah-berita&notif=tambahkosong&
      jenis=cover");
    }else{   
	$sql = "INSERT INTO `berita` 
      (`id_user`,`judul`,`isi`,`foto`)
      VALUES ('$id_user','$judul','$isi','$nama_file')";
      //echo $sql;
	mysqli_query($koneksi,$sql);
	$id_berita = mysqli_insert_id($koneksi);
 
	if(!empty($_POST['tag'])){
		foreach($_POST['tag'] as $id_tag){
		   $sql_i = "insert into `tag_berita` (`id_berita`, `id_tag`) 
		   values ('$id_berita', '$id_tag')";
		   mysqli_query($koneksi,$sql_i);
		}
	}
      header("Location:index.php?include=berita&notif=tambahberhasil");
    }
?>