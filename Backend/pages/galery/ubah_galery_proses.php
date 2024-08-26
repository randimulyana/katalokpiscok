<?php
			include "../../config/koneksi.php";


			$id_galery = $_POST['id'];

			$query = mysqli_query($koneksi, "SELECT * fROM galery WHERE id_galery='$id_galery'");
	        $d = mysqli_fetch_array($query);
	        $foto_lama = $d['gambar_galery'];

			if($_FILES['foto']['name'] != null){
				
			$direktori      = "images/";
			$file_name      = $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);

			}else {
				$file_name = $foto_lama;
			}

			

			$result = mysqli_query($koneksi, "UPDATE galery SET foto='$file_name'  WHERE id_galery='$id_galery'");

			if ($result) {
			header("Location:../../index.php?page=data_galery");
			}else {
				echo 'gagal';
			}
			
			
			?>