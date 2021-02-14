<?php
  $query = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id_mahasiswa='".$_GET['id']."'");
  $row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH DATA MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li class="active"></li>
      </ol>
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
            <form role="form" method="post" action="pages/mahasiswa/ubah_mahasiswa_proses.php">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row['id_mahasiswa']; ?>">
                <div class="form-group">
                  <label>Nomor Pokok Mahasiswa (NPM)</label>
                  <input type="text" name="nim" class="form-control" placeholder="Nim" value="<?php echo $row['nim']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Nama Mahasiswa</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas">
                    <option value="<?php echo $row['kelas']; ?>"><?php echo $row['kelas']; ?></option>
                    <option value="Pagi">Pagi</option>
                    <option value="Malam">Malam</option>
                    <option value="Shift">Shift</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Program Studi</label>
                  <select class="form-control" name="jurusan">
                    <option value="<?php echo $row['jurusan']; ?>"><?php echo $row['jurusan']; ?></option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Akutansi">Akutansi</option>
					<option value="Manajemen">Manajemen</option>
					<option value="Ilmu Hukum">Ilmu Hukum</option>
					<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
					<option value="Administrasi Negara">Administrasi Negara</option>
					<option value="Sastra Inggris">Sastra Inggris</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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