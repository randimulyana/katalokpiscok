<?php
	include "../../config/koneksi.php";

	$judul     = $_POST['judul'];
	$author    = $_POST['author'];
	$deskripsi    = $_POST['deskripsi'];


	$direktori      = "images/";
	$file_name      = $_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $direktori.$file_name);

	$tambah = mysqli_query($koneksi, "INSERT INTO artikel(judul, deskripsi, author, gambar) VALUES ('$judul', '$author', '$deskripsi', '$file_name')");
	if($tambah){
		
	header("Location:../../index.php?page=data_artikel");
   
	}else{
		
		// echo 'gagal';
		mysqli_affected_rows($koneksi);
	}
	
?>
	