<?php
	include "../../config/koneksi.php";

	$nama     = $_POST['nama'];
	$harga    = $_POST['harga'];


	$direktori      = "images/";
	$file_name      = $_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $direktori.$file_name);

	$tambah = mysqli_query($koneksi, "INSERT INTO menu(nama_produk, harga_produk, gambar_produk) VALUES ('$nama', '$harga', '$file_name')");
	if($tambah){
		
	header("Location:../../index.php?page=data_produk");
   
	}else{
		
		// echo 'gagal';
		mysqli_affected_rows($koneksi);
	}
	
?>
	