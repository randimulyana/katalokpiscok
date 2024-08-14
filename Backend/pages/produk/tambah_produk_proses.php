<?php
	
	include "../../config/koneksi.php";

	$nim     = $_POST['nim'];
	$nama    = $_POST['nama'];
	$alamat  = $_POST['alamat'];
	$jurusan = $_POST['jurusan'];


	$direktori      = "img/";
	$file_name      = $_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $direktori.$file_name);

	$tambah = mysqli_query($koneksi, "INSERT INTO tb_mahasiswa(nim, nama, alamat, jurusan, foto) VALUES ('$nim','$nama','$alamat','$jurusan', '$file_name')");
	if($tambah){
	header("Location:../../index.php?page=data_mahasiswa");
   
	}else{
		// echo 'gagal';
		mysqli_affected_rows($koneksi);
	}
	
?>
	