<?php
include '../../koneksi.php';

$fp = $_POST['fp_data'];
$pasien_id = $_GET['user_id'];
$fp = urlencode($fp);
// file_put_contents('enroll.txt', implode(array_merge($_POST, $_GET)));
$query = "INSERT INTO finger_pasien VAlUES('','$pasien_id','$fp')";
$query_run = mysqli_query($koneksi, $query);
// menginput data ke database
if ($query_run) {
    echo 'Berhasil menambah fingerprint user '.$pasien_id;
} else {
    echo 'Gagal menambah fingerprint';
}
