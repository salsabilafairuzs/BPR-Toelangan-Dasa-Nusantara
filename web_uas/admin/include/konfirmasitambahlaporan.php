<?php 
    $id_jenis_laporan = $_POST['jenis_laporan'];
    $nama_laporan = $_POST['nama_laporan'];
    $tahun = $_POST['tahun'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;

    if(empty($id_jenis_laporan)){
	header("Location:index.php?include=tambah-laporan&notif=tambahkosong&
        jenis=id_jenis_laporan");
    }else if(empty($nama_laporan)){
        header("Location:index.php?include=tambah-laporan&notif=tambahkosong&
            jenis=nama_laporan");
    }else if(empty($tahun)){
	header("Location:index.php?include=tambah-laporan&notif=tambahkosong&
        jenis=tahun");
    }else if(!move_uploaded_file($lokasi_file,$direktori)){
        header("Location:index.php?include=tambah-laporan&notif=tambahkosong&
        jenis=file");
    }else{   
	$sql = "INSERT INTO `laporan` 
    (`id_jenis_laporan`,`nama_laporan`,`tahun`,`file`)
    VALUES ('$id_jenis_laporan','$nama_laporan','$tahun','$nama_file')";
      //echo $sql;
	mysqli_query($koneksi,$sql);

        header("Location:index.php?include=laporan&notif=tambahberhasil");
    }
?>