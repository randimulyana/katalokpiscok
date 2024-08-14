<?php 

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "");
mysqli_select_db($koneksi, "produk_piscok") or die("gagal");


?>