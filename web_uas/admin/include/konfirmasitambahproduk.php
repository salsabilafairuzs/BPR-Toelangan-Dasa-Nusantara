<?php 
    $id_jenis_produk = $_POST['jenis_produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $keunggulan = $_POST['keunggulan'];
    $syarat= $_POST['syarat'];
    $fitur = $_POST['fitur'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $direktori = 'file/'.$nama_file;

    if(empty($id_jenis_produk)){
	header("Location:index.php?include=tambah-produk&notif=tambahkosong&
        jenis=id_jenis_produk");
    }else if(empty($nama_produk)){
        header("Location:index.php?include=tambah-produk&notif=tambahkosong&
            jenis=nama_produk");
    }else if(empty($deskripsi)){
	header("Location:index.php?include=tambah-produk&notif=tambahkosong&
        jenis=deskripsi");
    }else if(empty($keunggulan)){
	header("Location:index.php?include=tambah-produk&notif=tambahkosong&
        jenis=keunggulan");
    }else if(empty($syarat)){
	header("Location:index.php?include=tambah-produk&notif=tambahkosong&
        jenis=syarat");
    }else if(!move_uploaded_file($lokasi_file,$direktori)){
        header("Location:index.php?include=tambah-produk&notif=tambahkosong&
        jenis=file");
    }else{   
	$sql = "INSERT INTO `produk` 
    (`id_jenis_produk`,`nama_produk`,`deskripsi`,`keunggulan`,`syarat`,`fitur`,`file`)
    VALUES ('$id_jenis_produk','$nama_produk','$deskripsi','$keunggulan','$syarat','$fitur','$nama_file')";
      //echo $sql;
	mysqli_query($koneksi,$sql);

        header("Location:index.php?include=produk&notif=tambahberhasil");
    }
?>