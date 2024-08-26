

<?php

// Getting id from url
$id = $_GET['id'];
 include "config/koneksi.php";
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel='$id'");
 $d = mysqli_fetch_array($result);

?>


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Edit Artikel
        </h1>
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="mahasiswa">Artikel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Artikel</li>
  </ol>
</nav>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" action="pages/artikel/ubah_artikel_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d['id_artikel']; ?>">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="judul" value="<?php echo $d['judul']; ?>">
                  </div>
                  <div class="form-group">
                    <label>foto</label>
                    <br>
                    <img src="pages/artikel/images/<?= $d['gambar'] ?>" alt="tes" style="width: 10em;">
                    <br>
                    <input type="file" name="foto" value="<?php echo $d['gambar']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="<?php echo $d['deskripsi']; ?>">
                  </div>
                  
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="simpan" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->