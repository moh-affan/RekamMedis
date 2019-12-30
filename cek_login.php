<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE USERNAME='$username' and PASSWORD='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['LEVEL']=="admin"){

		// buat session login dan username
		$_SESSION['USERNAME'] = $username;
		$_SESSION['LEVEL'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/home/list.php");

	// cek jika user login sebagai pegawai
	}else if($data['LEVEL']=="dokter"){
		// buat session login dan username
		$_SESSION['USERNAME'] = $username;
		$_SESSION['LEVEL'] = "dokter";
		// alihkan ke halaman dashboard pegawai
		header("location:dokter/home/list.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="pengurus"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_pengurus.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>