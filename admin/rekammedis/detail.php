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
                    			<td><?=date('d-m-Y', strtotime($pasien['TANGGAL_LAHIR_PASIEN']))?></td>
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
        </div>
    </div>
</section>

<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Rekam Medis</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="custom-tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#tambah-poli-umum" role="tab" aria-controls="custom-nav-home" aria-selected="true">Poli Umum</a>
                        <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#tambah-poli-gigi" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Poli Gigi</a>
                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#tambah-poli-kia" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Poli KIA</a>
                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#tambah-poli-akupuntur" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Poli Akupuntur</a>
                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#tambah-poli-p2m" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Poli P2M</a>
                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#tambah-sanitasi-klinis" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Sanitasi Klinis</a>
                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#tambah-konseling-gizi" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Konseling Gizi</a>
                    </div>
                 </nav>

                 <div class="modal-body">
                 <div class="tab-content pl-3 pt-2" id="nav-tabContent">

                    <!-- umum --> 
                    <div class="tab-pane fade show active" id="tambah-poli-umum" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                       
                        <form action="?act=tambah_action_umum" method="POST">
                            <div class="form-group">
                                <label>ID PASIEN</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="ID_PASIEN" type="" class="form-control" placeholder="" value="<?php echo $pasien['ID_PASIEN'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Periksa</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="TANGGAL_UMUM" name="TANGGAL_UMUM" value="<?php echo date('Y-m-j'); ?>" type="date" class="form-control" placeholder="Tanggal Periksa" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="UMUR_UMUM" type="text" class="form-control" placeholder="Umur" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Anamnesa</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="ANAMNESA_UMUM" type="text" class="form-control" placeholder="Anamnesa" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Fisik</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="PFISIK_UMUM" type="text" class="form-control" placeholder="Fisik" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Diagnosa</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="DIAGNOSA_UMUM" type="text" class="form-control" placeholder="Diagnosa" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tindakan</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="TINDAKAN_UMUM" type="text" class="form-control" placeholder="Tindakan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kode ICX</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="KODEICX_UMUM" type="text" class="form-control" placeholder="Kode ICX" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kasus</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="JENISKASUS_UMUM" type="text" class="form-control" placeholder="Jenis Kasus" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Konseling</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="KONSELING_UMUM" type="text" class="form-control" placeholder="Konseling" required>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit" name="submit">Tambah</button>
                            <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">Kembali</button>

                        </form>
                    </div>


                    <!-- gigi -->
                     <div class="tab-pane fade" id="tambah-poli-gigi" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                        <form action="?act=tambah_action_gigi" method="POST">
                            <div class="form-group">
                                <label>ID PASIEN</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="ID_PASIEN" type="" class="form-control" placeholder="" value="<?php echo $pasien['ID_PASIEN'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Periksa</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="TANGGAL_UMUM" name="TANGGAL_GIGI" type="date" class="form-control" placeholder="Tanggal Periksa" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="UMUR_GIGI" type="text" class="form-control" placeholder="Umur" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Anamnesa</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="ANAMNESA_GIGI" type="text" class="form-control" placeholder="Anamnesa" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tindakan</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="TINDAKAN_GIGI" type="text" class="form-control" placeholder="Tindakan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pengobatan</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="PENGOBATAN_GIGI" type="text" class="form-control" placeholder="Pengobatan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Diagnosa</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="DIAGNOSA_GIGI" type="text" class="form-control" placeholder="Diagnosa" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kode ICX</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="KODEICX_GIGI" type="text" class="form-control" placeholder="Kode ICX" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kasus</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="JENISKASUS_GIGI" type="text" class="form-control" placeholder="Jenis Kasus" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Konseling</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="KONSELING_GIGI" type="text" class="form-control" placeholder="Konseling" required>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit" name="submit">Tambah</button>
                            <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">Kembali</button>

                        </form>
                    </div>


                    <!-- kia -->
                    <div class="tab-pane fade" id="tambah-poli-kia" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                        kia
                    </div>


                    <!-- akupuntur -->
                    <div class="tab-pane fade" id="tambah-poli-akupuntur" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                        akupuntur
                    </div>

                    <!-- p2m -->
                    <div class="tab-pane fade" id="tambah-poli-p2m" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                        gigi
                    </div>


                    <!-- sanitasi -->
                    <div class="tab-pane fade" id="tambah-sanitasi-klinis" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                        sanitasi
                    </div>


                    <!-- gizi -->
                    <div class="tab-pane fade" id="tambah-konseling-gizi" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                        gizi
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<?php include '../main/footer.php' ?>

