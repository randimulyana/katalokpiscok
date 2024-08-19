<?php 

// Koneksi ke database
// $koneksi = mysqli_connect("localhost", "root", "");
// mysqli_select_db($koneksi, "produk_piscok") or die("gagal");

// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "produk_piscok";

// $koneksi = mysqli_connect($hostname, $username, $password, $database);

try{
  $koneksi = mysqli_connect("localhost", "root", "", "produk_piscok");
  // echo "Berhasil";
}catch(Exception $e){
  echo "gagal terhubung ke database: " . $e->getMessage();
}

?>