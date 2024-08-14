

<?php

// Getting id from url
$id = $_GET['id'];
 include "config/koneksi.php";
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa='$id'");
 $d = mysqli_fetch_array($result);

?>


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Edit Mahasiswa
        </h1>
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="mahasiswa">Mahasiswa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Mahasiswa</li>
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
              <form role="form" method="post" action="pages/mahasiswa/ubah_mahasiswa_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $d['id_mahasiswa']; ?>">
                  <div class="form-group">
                    <label>Nim</label>
                    <input type="text" name="nim" class="form-control" placeholder="Nim" value="<?php echo $d['nim']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $d['nama']; ?>">
                  </div>
                  <div class="form-group">
                    <label>foto</label>
                    <br>
                    <img src="pages/mahasiswa/img/<?= $d['foto'] ?>" alt="tes" style="width: 10em;">
                    <br>
                    <input type="file" name="foto" value="<?php echo $d['foto']; ?>">
                  </div>
                  <div class="form-group">
                    <label>alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $d['alamat']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" name="jurusan">
                      <option value="<?php echo $d ['jurusan']; ?>">- <?php echo $d ['jurusan']; ?> -</option>
                      <option value="RPL"> RPL </option>
                      <option value="MM"> MM </option>
                      <option value="TKJ"> TKJ </option>
                    </select>
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