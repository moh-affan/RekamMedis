<?php
// koneksi database
include '../../koneksi.php'; 

$action = isset($_GET['act']) ? $_GET['act'] : '' ;
switch ($action) {
	case 'detail':
		include 'detail.php';
		break;

	case 'tambah_action':
		tambah_action($koneksi);
		break;

	case 'edit':
		include 'edit.php';
		break;

	case 'edit_action':
		edit_action($koneksi);
		break;

	case 'hapus_action':
		hapus_action($koneksi);
		break;
	
	default:
		include 'list.php';
		break;
}


function edit_action($koneksi)
{
# code...
	// menangkap data yang di kirim dari form
		$id = $_POST['ID_USER'];
		$username = $_POST['USERNAME'];
		$password = $_POST['PASSWORD'];
		$nama_lengkap = $_POST['NAMA_LENGKAP'];
		$status = $_POST['STATUS'];
		$tanggal_lahir = $_POST['TANGGAL_LAHIR'];
		$no_tlp = $_POST['NO_TLP'];
		$alamat = $_POST['ALAMAT'];

		mysqli_query($koneksi,"UPDATE tb_user SET USERNAME='$username',PASSWORD='$password',NAMA_LENGKAP='$nama_lengkap',STATUS='$status',TANGGAL_LAHIR='$tanggal_lahir',NO_TLP='$no_tlp',ALAMAT='$alamat' WHERE ID_USER='$id'");
	// menginput data ke database
		
			header("location:?act=list.php");
	// mengalihkan halaman kembali ke index.php

}

function tambah_action($koneksi)
{
if (isset($_POST['submit']) ){
		# code...
	// menangkap data yang di kirim dari form
		$id = $_POST['ID_USER'];
		$username = $_POST['USERNAME'];
		$password = $_POST['PASSWORD'];
		$level = $_POST['LEVEL'];
		$nama_lengkap = $_POST['NAMA_LENGKAP'];
		$status = $_POST['STATUS'];
		$tanggal_lahir = $_POST['TANGGAL_LAHIR'];
		$no_tlp = $_POST['NO_TLP'];
		$alamat = $_POST['ALAMAT'];

		$query = "INSERT INTO tb_user VAlUES('$id','$username','$password','$level','$nama_lengkap','$status','$tanggal_lahir','$no_tlp','$alamat')";
		$query_run = mysqli_query($koneksi,$query);
	// menginput data ke database
		if ($query_run) {
		# code...
			echo '<script> alert("Berhasil"); </script>';
			header('location:?act=list.php');
		}
		else
		{

			echo '<script>alert("tidak Berhasil"); </script>';
		}
	// mengalihkan halaman kembali ke index.php
	}
}
function hapus_action($koneksi)
{
$id = $_GET['id'];
// query SQL untuk insert data
$query = "DELETE from tb_user where ID_USER='$id'";
mysqli_query($koneksi, $query);

header("location:?act=list.php?pesan=hapus");

}

	


?>
