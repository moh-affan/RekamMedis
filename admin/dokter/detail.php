<?php include '../main/header.php' ?>

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

<section class="content mt-3"> 
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php 

                        $cari = $_GET['id'];
                        $query = "SELECT * FROM tb_user WHERE ID_USER =".$cari;
                        $res = mysqli_query($koneksi,$query);
                        $pasien = mysqli_fetch_array($res);

                         ?>
                    	<table id="bootstrap-data-table-export" class="table table-striped">
                    		<tr>
                    			<td>Id Pasien</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['ID_USER'] ?></td>
                    		</tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><?php echo $pasien['USERNAME'] ?></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><?php echo $pasien['PASSWORD'] ?></td>
                            </tr>
                    		<tr>
                    			<td>Nama</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['NAMA_LENGKAP'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Status</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['STATUS'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Tanggal Lahir</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['TANGGAL_LAHIR'] ?></td>
                    		</tr>
                            <tr>
                                <td>No. Hp</td>
                                <td>:</td>
                                <td><?php echo $pasien['NO_TLP'] ?></td>
                            </tr>
                    		<tr>
                    			<td>Alamat</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['ALAMAT'] ?></td>
                    		</tr>
                    	</table>
                    </div>
                </div>
            </section>

<?php include '../main/footer.php' ?>

