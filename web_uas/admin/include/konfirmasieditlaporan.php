<?php 
if(isset($_SESSION['id_laporan'])){
    $id_laporan = $_SESSION['id_laporan'];
    $id_jenis_laporan = $_POST['jenis_laporan'];
    $nama_laporan = $_POST['nama_laporan'];
    $tahun = $_POST['tahun'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;
 
    //get cover 
    $sql_f = "SELECT `file` FROM `laporan` WHERE `id_laporan`='$id_laporan'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $file= $data_f[0];
        //echo $foto;
    }
   
    if(empty($id_jenis_laporan)){
	    header("Location:index.php?include=edit-laporan&data=$id_laporan&notif=editkosong
         &jenis=jenis_laporan");
	}else if(empty($nama_laporan)){
	    header("Location:index.php?include=edit-laporan&data=$id_laporan&notif=editkosong
         &jenis=nama_laporan");
	}else if(empty($tahun)){
	    header("Location:index.php?include=edit-laporan&data=$id_laporan&notif=editkosong
         &jenis=tahun");
	}else{
        $lokasi_file = $_FILES['file']['tmp_name'];
	    $nama_file = $_FILES['file']['name'];
	    $direktori = 'file/'.$nama_file;
	    if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($file)){
                unlink("file/$file");
            }
	        $sql = "UPDATE `laporan` set `id_jenis_laporan`='$id_jenis_laporan', `nama_laporan`='$nama_laporan', `tahun`='$tahun', `file`='$nama_file'
	        WHERE `id_laporan`='$id_laporan'";
	        mysqli_query($koneksi,$sql);
        }else{
	        $sql = "UPDATE `laporan` set `id_jenis_laporan`='$id_jenis_laporan', `nama_laporan`='$nama_laporan', `tahun`='$tahun', `file`='$nama_file'
	        WHERE `id_laporan`='$id_laporan'";
	        mysqli_query($koneksi,$sql);
        }
        header("Location:index.php?include=laporan&notif=editberhasil");
    }
}
?>