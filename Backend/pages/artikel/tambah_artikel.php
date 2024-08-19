  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Tambah Artikel
        </h1>
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="mahasiswa">Artikel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Artikel</li>
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
              <form role="form" method="POST" action="pages/produk/tambah_produk_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
                    <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto">
                  </div>
                   </div>
                    <div class="form-group">
                    <label>author</label>
                    <input type="text" name="harga" class="form-control" placeholder="masukan harga disini">
                  </div>
                  <div class="form-grup">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="isi disini..."></textarea>
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