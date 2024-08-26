<?php
			include "../../config/koneksi.php";


			$id_artikel = $_POST['id'];
			$judul         = $_POST['judul'];
			$author       = $_POST['author'];
			$deskripsi       = $_POST['deskripsi'];

			$query = mysqli_query($koneksi, "SELECT * fROM artikel WHERE id_artikel='$id_artikel'");
	        $d = mysqli_fetch_array($query);
	        $foto_lama = $d['gambar_artikel'];

			if($_FILES['foto']['name'] != null){
				
			$direktori      = "images/";
			$file_name      = $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);

			}else {
				$file_name = $foto_lama;
			}

			

			$result = mysqli_query($koneksi, "UPDATE artikel SET nama_artikel='$nama', harga_artikel='$harga', gambar_artikel='$file_name'  WHERE id_artikel='$id_artikel'");

			if ($result) {
			header("Location:../../index.php?page=data_artikel");
			}else {
				echo 'gagal';
			}
			
			
			?>