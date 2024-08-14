<?php
			include "../../config/koneksi.php";


			$id_mahasiswa = $_POST['id'];
			$nim          = $_POST['nim'];    
			$nama         = $_POST['nama'];
			$alamat       = $_POST['alamat'];
			$jurusan      = $_POST['jurusan'];

			$query = mysqli_query($koneksi, "SELECT * fROM tb_mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");
	        $d = mysqli_fetch_array($query);
	        $foto_lama = $d['foto'];

			if($_FILES['foto']['name'] != null){
			
			$direktori      = "img/";
			$file_name      = $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);

			}else {
				$file_name = $foto_lama;
			}

			

			$result = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET nim='$nim', nama='$nama', foto='$file_name', alamat='$alamat', jurusan='$jurusan', foto='$file_name'  WHERE id_mahasiswa='$id_mahasiswa'");

			if ($result) {
			header("Location:../../index.php?page=data_mahasiswa");
			}else {
				echo 'gagal';
			}
			
			
			?>