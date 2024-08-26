<?php
	include "../../config/koneksi.php";



	$direktori      = "images/";
	$file_name      = $_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $direktori.$file_name);

	$tambah = mysqli_query($koneksi, "INSERT INTO galery(foto) VALUES ('$file_name')");
	if($tambah){
		
	header("Location:../../index.php?page=data_galery");
   
	}else{
		
		// echo 'gagal';
		mysqli_affected_rows($koneksi);
	}
	
?>
	