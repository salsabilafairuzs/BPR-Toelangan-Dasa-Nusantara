<?php 
if(isset($_SESSION['id_produk'])){
    $id_produk = $_SESSION['id_produk'];
    $id_jenis_produk = $_POST['jenis_produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $keunggulan = $_POST['keunggulan'];
    $syarat = $_POST['syarat'];
    $fitur = $_POST['fitur'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;
 
    //get cover 
    $sql_f = "SELECT `file` FROM `produk` WHERE `id_produk`='$id_produk'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $file= $data_f[0];
        //echo $foto;
    }
   
    if(empty($id_jenis_produk)){
	    header("Location:index.php?include=edit-produk&data=$id_produk&notif=editkosong
         &jenis=jenis_produk");
	}else if(empty($nama_produk)){
	    header("Location:index.php?include=edit-produk&data=$id_produk&notif=editkosong
         &jenis=nama_produk");
	}else if(empty($deskripsi)){
	    header("Location:index.php?include=edit-produk&data=$id_produk&notif=editkosong
         &jenis=deskripsi");
	}else if(empty($keunggulan)){
	    header("Location:index.php?include=edit-produk&data=$id_produk&notif=editkosong
         &jenis=keunggulan");
	}else if(empty($syarat)){
	    header("Location:index.php?include=edit-produk&data=$id_produk&notif=editkosong
         &jenis=syarat");
	}else{
        $lokasi_file = $_FILES['file']['tmp_name'];
	    $nama_file = $_FILES['file']['name'];
	    $direktori = 'file/'.$nama_file;
	    if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($file)){
                unlink("file/$file");
            }
	        $sql = "UPDATE `produk` set `id_jenis_produk`='$id_jenis_produk', `nama_produk`='$nama_produk', `deskripsi`='$deskripsi', `keunggulan`='$keunggulan', `syarat`='$syarat',`fitur`='$fitur', `file`='$nama_file'
	        WHERE `id_produk`='$id_produk'";
	        mysqli_query($koneksi,$sql);
        }else{
	        $sql = "UPDATE `produk` set `id_jenis_produk`='$id_jenis_produk', `nama_produk`='$nama_produk', `deskripsi`='$deskripsi', `keunggulan`='$keunggulan', `syarat`='$syarat',`fitur`='$fitur', `file`='$nama_file'
	        WHERE `id_produk`='$id_produk'";
	        mysqli_query($koneksi,$sql);
        }
        header("Location:index.php?include=produk&notif=editberhasil");
    }
}
?>