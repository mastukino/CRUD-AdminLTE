<?php
     include "../../conf/conn.php";
     $id = $_GET['id'];
     mysqli_query($conn,"DELETE FROM mahasiswa WHERE id_mahasiswa ='$id'");
	 header('location:../../index.php?page=data_mahasiswa');
   ?>