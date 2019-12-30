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

                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi,"select * from tb_pasien where ID_PASIEN='$id'");
                        while($pasien = mysqli_fetch_array($data)){?>
                       <form action="?act=edit_action" name="modal_popup" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="NAMA_PASIEN" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pasien['NAMA_PASIEN'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="NIK" type="text" class="form-control" placeholder="Sesuai KTP" value="<?php echo $pasien['NIK'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="ALAMAT_PASIEN" type="text" class="form-control" placeholder="Alamat" value="<?php echo $pasien['ALAMAT_PASIEN'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="AGAMA" type="text" class="form-control" placeholder="Agama" value="<?php echo $pasien['AGAMA'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="PEKERJAAN" type="text" class="form-control" placeholder="Pekerjaan" value="<?php echo $pasien['PEKERJAAN'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                    <select name="JENIS_KELAMIN" class="form-control">
                                        <option selected><?php echo $pasien['JENIS_KELAMIN'] ?></option>
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
                                    <input id="TANGGAL_LAHIR_PASIEN" name="TANGGAL_LAHIR_PASIEN" type="date" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $pasien['TANGGAL_LAHIR_PASIEN'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Metode Pembayaran</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <select name="METODE_PEMBAYARAN" class="form-control" required>
                                        <option selected value=""><?php echo $pasien['METODE_PEMBAYARAN'] ?></option>
                                        <option value="TUNAI">TUNAI</option>
                                        <option value="JPS">JPS</option>
                                        <option value="ASKES">ASKES</option>
                                        <option value="BPJS">BPJS</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit" name="submit">Update</button>
                            </div>
                        </form>
                        <<?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php include '../main/footer.php' ?>