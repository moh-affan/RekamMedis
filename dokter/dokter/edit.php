<?php include '../main/header.php' ?>


<?php 
    $iddokter = $_GET['iddokter'];

    // $query = "SELECT * FROM tb_pasien WHERE ID_PASIEN =".$cari;
    // $res = mysqli_query($koneksi,$query);
    // $pasien = mysqli_fetch_array($res);

 ?>


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Rekam Medis</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dokter</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<?php include '../main/footer.php' ?>