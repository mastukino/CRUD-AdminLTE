<?php
include "../../conf/conn.php";
if($_POST){$nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $jurusan = $_POST['jurusan'];
  mysqli_query($conn,"INSERT INTO mahasiswa(id_mahasiswa,nim,nama,kelas,jurusan) VALUES ('','$nim','$nama','$kelas','$jurusan')");
  header('location:../../index.php?page=data_mahasiswa');
}
?>