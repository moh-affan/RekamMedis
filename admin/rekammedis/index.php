<?php
// koneksi database
include '../../koneksi.php'; 

$action = isset($_GET['act']) ? $_GET['act'] : '' ;
switch ($action) {
	case 'detail':
		include 'detail.php';
		break;

	case 'tambah_action_umum':
		tambah_action_umum($koneksi);
		break;

	case 'tambah_action_gigi':
		tambah_action_gigi($koneksi);
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
 function tambah_action_umum($koneksi)
 {
 	if (isset($_POST['submit']) ){
		# code...
	// menangkap data yang di kirim dari form
		$id_pasien = $_POST['ID_PASIEN'];
		$tgl_umum = $_POST['TANGGAL_UMUM'];
		$umur_umum = $_POST['UMUR_UMUM'];
		$anamnesa_umum = $_POST['ANAMNESA_UMUM'];
		$pfisik_umum = $_POST['PFISIK_UMUM'];
		$diagnosa_umum = $_POST['DIAGNOSA_UMUM'];
		$tindakan_umum = $_POST['TINDAKAN_UMUM'];
		$kodeicx_umum = $_POST['KODEICX_UMUM'];
		$jeniskasus_umum = $_POST['JENISKASUS_UMUM'];
		$konseling_umum = $_POST['KONSELING_UMUM'];



		$query = "INSERT INTO poli_umum VAlUES('','$id_pasien','$tgl_umum','$umur_umum','$anamnesa_umum','$pfisik_umum','$diagnosa_umum','$tindakan_umum','$kodeicx_umum','$jeniskasus_umum','$konseling_umum')";
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

function tambah_action_gigi($koneksi)
 {
 	if (isset($_POST['submit']) ){
		# code...
	// menangkap data yang di kirim dari form
		$id_pasien = $_POST['ID_PASIEN'];
		$tgl_gigi = $_POST['TANGGAL_GIGI'];
		$umur_gigi = $_POST['UMUR_GIGI'];
		$anamnesa_gigi = $_POST['ANAMNESA_GIGI'];
		$tindakan_gigi = $_POST['TINDAKAN_GIGI'];
		$pengobatan_gigi = $_POST['PENGOBATAN_GIGI'];
		$diagnosa_gigi = $_POST['DIAGNOSA_GIGI'];
		$kodeicx_gigi = $_POST['KODEICX_GIGI'];
		$jeniskasus_gigi = $_POST['JENISKASUS_GIGI'];
		$konseling_gigi = $_POST['KONSELING_GIGI'];



		$query = "INSERT INTO poli_gigi VAlUES('','$id_pasien','$tgl_gigi','$umur_gigi','$anamnesa_gigi','$tindakan_gigi','$pengobatan_gigi','$diagnosa_gigi','$kodeicx_gigi','$jeniskasus_gigi','$konseling_gigi')";
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
