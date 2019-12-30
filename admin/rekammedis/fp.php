<?php
include '../../koneksi.php';

$fps = [];
$data = mysqli_query($koneksi, "SELECT PASIEN_ID, FP FROM finger_pasien");
while ($d = mysqli_fetch_array($data)) {
    array_push($fps, ['fp' => $d['FP'], 'userId' => $d['PASIEN_ID']]);
}
echo json_encode(['data' => $fps]);
