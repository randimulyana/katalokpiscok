 
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Data Produk</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Data Produk</li>
</ol>
</nav>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
    </div>
    <div class="card-body">
    <div class="box-header py-3">
        <a href="tambah_mahasiswa" class="btn btn-primary" role="button" title="Tambah Data"><i class="fas fa-fw fa-plus-circle"></i>Tambah Mahasiswa</a>
    </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>


                    <!-- Tampilakan data dari database menu ke dashboard admin -->
<?php
include "config/koneksi.php";
$no=0;
$query = mysqli_query($koneksi, "SELECT * FROM menu ORDER BY id_produk ASC");
while ($row = mysqli_fetch_array($query)) {
?>
                    <tr>
                        <td><?php echo $no=$no+1;?></td>
                        <td><?php echo $row['nama_produk'];?></td>
                        <td><img src="<?php echo 'pages/produk/images/'.$row['gambar_produk']; ?>" width="80em"></td>
                        <td><?php echo $row['harga_produk'];?></td>
                        <td>
                            <a href="index.php?page=ubah_mahasiswa&id=<?=$row['id_produk'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit">Edit</i></a>
                            <a onclick="return confirm('yakin')" href="pages/mahasiswa/hapus_mahasiswa.php?id=<?=$row['id_produk'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash">Delete</i></a>
                        </td>
                    </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->