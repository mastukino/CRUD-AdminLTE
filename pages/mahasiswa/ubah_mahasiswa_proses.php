<?php
  include "../../conf/conn.php";
     if($_POST){
		 $id = $_POST['id'];
		 $nim = $_POST['nim'];
		 $nama = $_POST['nama'];
		 $kelas = $_POST['kelas'];
		 $jurusan = $_POST['jurusan'];
		 mysqli_query($conn,"UPDATE mahasiswa SET nim='$nim',nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id_mahasiswa ='$id'");
	     header('location:../../index.php?page=data_mahasiswa');
	}
?>