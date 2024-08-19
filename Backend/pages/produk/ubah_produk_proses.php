<?php
			include "../../config/koneksi.php";


			$id_produk = $_POST['id'];
			$nama         = $_POST['nama'];
			$harga       = $_POST['harga'];

			$query = mysqli_query($koneksi, "SELECT * fROM menu WHERE id_produk='$id_produk'");
	        $d = mysqli_fetch_array($query);
	        $foto_lama = $d['gambar_produk'];

			if($_FILES['foto']['name'] != null){
				
			$direktori      = "images/";
			$file_name      = $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);

			}else {
				$file_name = $foto_lama;
			}

			

			$result = mysqli_query($koneksi, "UPDATE menu SET nama_produk='$nama', harga_produk='$harga', gambar_produk='$file_name'  WHERE id_produk='$id_produk'");

			if ($result) {
			header("Location:../../index.php?page=data_produk");
			}else {
				echo 'gagal';
			}
			
			
			?>