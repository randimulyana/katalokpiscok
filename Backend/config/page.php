<?php

//---------------------------------------------- Admin
 if(isset($_GET['page'])){
 $page = $_GET['page'];
switch ($page) {
// Beranda
 case 'data_admin':
   include 'pages/admin/data_admin.php';
   break;
 case 'tambah_admin':
   include 'pages/admin/tambah_admin.php';
   break;
 case 'ubah_admin';
   include 'pages/admin/ubah_admin.php';
   break;
 }
} else {
 include 'pages/beranda.php';
}


//----------------------------------//  Menu  \\----------------------------------\\

if(isset($_GET['page'])){
  $page = $_GET['page'];
  switch ($page) {
    // Beranda
    case 'data_produk':
      include 'pages/produk/data_produk.php';
      break;
      case 'tambah_produk':
        include 'pages/produk/tambah_produk.php';
        break;
        case 'ubah_produk';
        include 'pages/produk/ubah_produk.php';
        break;
      }
    }



//----------------------------------//  Artikel  \\----------------------------------\\

if(isset($_GET['page'])){
$page = $_GET['page'];
switch ($page) {
// Beranda
case 'data_artikel':
  include 'pages/artikel/data_artikel.php';
  break;
  case 'tambah_artikel':
    include 'pages/artikel/tambah_artikel.php';
    break;
    case 'ubah_artikel';
    include 'pages/artikel/ubah_artikel.php';
    break;
  }
}


if(isset($_GET['page'])){
 $page = $_GET['page'];
switch ($page) {
// Beranda
 case 'data_galery':
   include 'pages/galery/data_galery.php';
   break;
 case 'tambah_galery':
   include 'pages/galery/tambah_galery.php';
   break;
 case 'ubah_galery';
   include 'pages/galery/ubah_galery.php';
   break;
 }
}
 


//  -------------------------------------------pengumuman
if(isset($_GET['page'])){
 $page = $_GET['page'];
switch ($page) {
// Beranda  
 case 'data_pengumuman':
   include 'pages/pengumuman/data_pengumuman.php';
   break;
 case 'tambah_pengumuman':
   include 'pages/pengumuman/tambah_pengumuman.php';
   break;
 case 'ubah_pengumuman';
   include 'pages/pengumuman/ubah_pengumuman.php';
   break;
 }
}




//--------------------------------------------- Kategori
if(isset($_GET['page'])){
 $page = $_GET['page'];
 switch ($page) {
   case 'data_kategori':
     include 'pages/kategori/data_kategori.php';
   break;
   case 'tambah_kategori':
     include 'pages/kategori/tambah_kategori.php';
   break;
   
 }
}

//------------------------------------------------------visi & misi
if(isset($_GET['page'])){
 $page = $_GET['page'];
switch ($page) {
// Beranda
 case 'data_visi_misi':
   include 'pages/visi_misi/data_visi_misi.php';
   break;
 case 'ubah_visi_misi';
   include 'pages/visi_misi/ubah_visi_misi.php';
   break;
 }
}

// -----------------------------------------------------------testimoni
if(isset($_GET['page'])){
 $page = $_GET['page'];
switch ($page) {
// Beranda
 case 'data_testimoni':
   include 'pages/testimoni/data_testimoni.php';
   break;
 case 'tambah_testimoni':
   include 'pages/testimoni/tambah_testimoni.php';
   break;
 case 'ubah_testimoni';
   include 'pages/testimoni/ubah_testimoni.php';
   break;
 }
}


//----------------------------------------------------- sejarah
if(isset($_GET['page'])){
 $page = $_GET['page'];
switch ($page) {
// Beranda
 case 'data_sejarah':
   include 'pages/sejarah/data_sejarah.php';
   break;
 case 'tambah_sejarah':
   include 'pages/sejarah/tambah_sejarah.php';
   break;
 case 'ubah_sejarah';
   include 'pages/sejarah/ubah_sejarah.php';
   break;
 }
}

// ----------------------------------------------------------info
if(isset($_GET['page'])){
 $page = $_GET['page'];
switch ($page) {
// Beranda
 case 'data_info':
   include 'pages/info/data_info.php';
   break;
 case 'ubah_info';
   include 'pages/info/ubah_info.php';
   break;
 }
}
// -----------------------------------------------------tujuan
if(isset($_GET['page'])){
 $page = $_GET['page'];
switch ($page) {
// Beranda
 case 'data_tujuan':
   include 'pages/tujuan/data_tujuan.php';
   break;
 case 'tambah_tujuan':
   include 'pages/tujuan/tambah_tujuan.php';
   break;
 case 'ubah_tujuan';
   include 'pages/tujuan/ubah_tujuan.php';
   break;
 }
}
//  else {
//           include "pages/beranda.php";
//         }
?>