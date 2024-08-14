  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Tambah Mahasiswa
        </h1>
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="mahasiswa">Mahasiswa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Mahasiswa</li>
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
              <form role="form" method="POST" action="pages/mahasiswa/tambah_mahasiswa_proses.php" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nim</label>
                     <input type="text" name="nim" class="form-control" placeholder="Nim">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
                    <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto">
                  </div>
                   </div>
                    <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"  placeholder="isi alamat disini!!"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" name="jurusan" required>
                      <option value="">- Pilih Jurusan -</option>
                      <option value="RPL"> Rekayasa Perangkat Lunak </option>
                      <option value="MM"> Multimedia </option>
                      <option value="TKJ"> Teknik komputer Jaringan </option>
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