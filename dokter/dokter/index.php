<?php
// koneksi database
include '../../koneksi.php'; 

$action = isset($_GET['act']) ? $_GET['act'] : '' ;
switch ($action) {
	case 'detail':
		include 'detail.php';
		break;

	case 'tambah_action':
		tambah_action();
		break;

	case 'edit':
		include 'edit.php';
		break;

	case 'edit_action':
		edit_action();
		break;

	case 'hapus_action':
		hapus_action();
		break;
	
	default:
		include 'list.php';
		break;
}


function edit_action()
{

}

function tambah_action()
{
	// if (isset($_POST['submit']) ){
	// 	# code...
	// // menangkap data yang di kirim dari form
	// 	$nama_pasien = $_POST['NAMA_PASIEN'];
	// 	$nik = $_POST['NIK'];
	// 	$alamat_pasien = $_POST['ALAMAT_PASIEN'];
	// 	$agama = $_POST['AGAMA'];
	// 	$pekerjaan = $_POST['PEKERJAAN'];
	// 	$jenis_kelamin = $_POST['JENIS_KELAMIN'];
	// 	$tanggal_lahir_pasien = $_POST['TANGGAL_LAHIR_PASIEN'];
	// 	$metode_pembayaran = $_POST['METODE_PEMBAYARAN'];

	// 	$query = "INSERT INTO tb_pasien VAlUES('','$nama_pasien','$nik','$alamat_pasien','$agama','$pekerjaan','$jenis_kelamin','$tanggal_lahir_pasien','$metode_pembayaran')";
	// 	$query_run = mysqli_query($koneksi,$query);
	// // menginput data ke database
	// 	if ($query_run) {
	// 	# code...
	// 		echo '<script> alert("Berhasil"); </script>';
	// 		header('location:../form-rekammedis.php');
	// 	}
	// 	else
	// 	{

	// 		echo '<script>alert("tidak Berhasil"); </script>';
	// 	}
	// // mengalihkan halaman kembali ke index.php
	// }

}

?>
