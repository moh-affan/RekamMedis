<?php
	
$koneksi = mysqli_connect("localhost", "root", "", "rekammedis");
	
if(mysqli_connect_error()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>