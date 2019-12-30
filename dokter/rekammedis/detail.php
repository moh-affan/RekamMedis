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
                    <li class="active">Rekam Medis</li>
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
                        $query = "SELECT * FROM tb_pasien WHERE ID_PASIEN =".$cari;
                        $res = mysqli_query($koneksi,$query);
                        $pasien = mysqli_fetch_array($res);
                        ?>
                    	<table id="bootstrap-data-table-export" class="table table-striped">
                    		<tr>
                    			<td>Id Pasien</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['ID_PASIEN'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Nama</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['NAMA_PASIEN'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>NIK</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['NIK'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Alamat</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['ALAMAT_PASIEN'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Agama</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['AGAMA'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Pekerjaan</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['PEKERJAAN'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Jenis Kelamin</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['JENIS_KELAMIN'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Tanggal Lahir</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['TANGGAL_LAHIR_PASIEN'] ?></td>
                    		</tr>
                    		<tr>
                    			<td>Metode Pembayaran</td>
                    			<td>:</td>
                    			<td><?php echo $pasien['METODE_PEMBAYARAN'] ?></td>
                    		</tr>
                    </table>
                </div>
                <div class="card-body">
                        <a type="button" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary">Tambah</a>
                </div>
                    <?php include 'poli.php' ?>
            </div>
        </div>
        </section>

        <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="?act=tambah_action" name="modal_popup" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="NAMA_PASIEN" type="text" class="form-control" placeholder="Nama Lengkap"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="NIK" type="text" class="form-control" placeholder="Sesuai KTP"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="ALAMAT_PASIEN" type="text" class="form-control" placeholder="Alamat"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="AGAMA" type="text" class="form-control" placeholder="Agama"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="PEKERJAAN" type="text" class="form-control" placeholder="Pekerjaan"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                    <select name="JENIS_KELAMIN" class="form-control">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki - laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="TANGGAL_LAHIR_PASIEN" name="TANGGAL_LAHIR_PASIEN" type="date" class="form-control" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Metode Pembayaran</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <input name="METODE_PEMBAYARAN" type="text" class="form-control" placeholder="Metode Pembayaran"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit" name="submit">
                                    Tambah
                                </button>
                                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                                    Kembali
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include '../main/footer.php' ?>

