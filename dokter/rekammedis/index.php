<?php
// koneksi database
include '../../koneksi.php'; 

$action = isset($_GET['act']) ? $_GET['act'] : '' ;
switch ($action) {
	case 'detail':
		include 'detail.php';
		break;

	case 'poliumum':
		include 'poliumum.php';
		break;

	case 'poligigi':
		include 'poligigi.php';
		break;

	case 'poliakupuntur':
		include 'poliakupuntur.php';
		break;

	case 'polikia':
		include 'poliKIA.php';
		break;

	case 'polip2m':
		include 'polip2m.php';
		break;

	case 'sanitasiklinis':
		include 'sanitasiklinis.php';
		break;

	case 'konselinggizi':
		include 'konselinggizi.php';
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
		$id = $_POST['ID_PASIEN'];
		$nama_pasien = $_POST['NAMA_PASIEN'];
		$nik = $_POST['NIK'];
		$alamat_pasien = $_POST['ALAMAT_PASIEN'];
		$agama = $_POST['AGAMA'];
		$pekerjaan = $_POST['PEKERJAAN'];
		$jenis_kelamin = $_POST['JENIS_KELAMIN'];
		$tanggal_lahir_pasien = $_POST['TANGGAL_LAHIR_PASIEN'];
		$metode_pembayaran = $_POST['METODE_PEMBAYARAN'];

		mysqli_query($koneksi,"UPDATE tb_pasien SET NAMA_PASIEN='$nama_pasien',NIK='$nik',ALAMAT_PASIEN='$alamat_pasien',AGAMA='$agama',PEKERJAAN='$pekerjaan',JENIS_KELAMIN='$jenis_kelamin',TANGGAL_LAHIR_PASIEN='$tanggal_lahir_pasien',METODE_PEMBAYARAN='$metode_pembayaran' WHERE ID_PASIEN='$id'");
	// menginput data ke database
		
			header("location:?act=list.php");
	// mengalihkan halaman kembali ke index.php

}

function tambah_action($koneksi)
{
	if (isset($_POST['submit']) ){
		# code...
	// menangkap data yang di kirim dari form
		$nama_pasien = $_POST['NAMA_PASIEN'];
		$nik = $_POST['NIK'];
		$alamat_pasien = $_POST['ALAMAT_PASIEN'];
		$agama = $_POST['AGAMA'];
		$pekerjaan = $_POST['PEKERJAAN'];
		$jenis_kelamin = $_POST['JENIS_KELAMIN'];
		$tanggal_lahir_pasien = $_POST['TANGGAL_LAHIR_PASIEN'];
		$metode_pembayaran = $_POST['METODE_PEMBAYARAN'];

		$query = "INSERT INTO tb_pasien VAlUES('','$nama_pasien','$nik','$alamat_pasien','$agama','$pekerjaan','$jenis_kelamin','$tanggal_lahir_pasien','$metode_pembayaran')";
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

?>
