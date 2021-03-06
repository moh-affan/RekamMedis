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

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <?php
                        $link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        $action_ver = base64_encode($link."?act=detail");
                        $fetch_fp = base64_encode($link."fp.php");
                        ?>
                        <a type="button" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary">Tambah</a>
                        <a href="fingerapp:Verification;<?= $action_ver ?>;<?= $fetch_fp ?>" class="btn btn-primary">Register Poli</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Alamat</th>
                                    <th>Agama</th>
                                    <th>Pekerjaan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jumlah Fingerprint</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT p.*, count(f.ID) as FP_COUNT from tb_pasien p LEFT JOIN finger_pasien f ON p.ID_PASIEN = f.PASIEN_ID GROUP BY p.ID_PASIEN ORDER BY ID_PASIEN DESC");
                                while ($d = mysqli_fetch_array($data)) { ?>
                                    <?php
                                    $link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                    $link = $link . "enroll.php?user_id=" . $d['ID_PASIEN'];
                                    $url_register = base64_encode($link);
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d['NAMA_PASIEN'] ?></td>
                                        <td><?php echo $d['NIK'] ?></td>
                                        <td><?php echo $d['ALAMAT_PASIEN'] ?></td>
                                        <td><?php echo $d['AGAMA'] ?></td>
                                        <td><?php echo $d['PEKERJAAN'] ?></td>
                                        <td><?php echo $d['JENIS_KELAMIN'] ?></td>
                                        <td><?= date('d-m-Y', strtotime($d['TANGGAL_LAHIR_PASIEN'])) ?></td>
                                        <td><?php echo $d['FP_COUNT'] ?></td>
                                        <td><a class="btn btn-sm btn-info" href="?act=edit&id=<?php echo $d['ID_PASIEN'] ?>" id=><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-info" href="?act=detail&id=<?php echo $d['ID_PASIEN'] ?>" id=><i class="fa fa-info"></i></a>
                                            <a class="btn btn-sm btn-info" href="fingerapp:Enrollment;<?= $url_register ?>" id=><i class="fa fa-500px"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                            <input name="NAMA_PASIEN" type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input name="NIK" type="text" class="form-control" placeholder="Sesuai KTP" onkeypress="return Angkasaja(event)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input name="ALAMAT_PASIEN" type="text" class="form-control" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-group"></i>
                            </div>
                            <select name="AGAMA" class="form-control" required>
                                <option selected>Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input name="PEKERJAAN" type="text" class="form-control" placeholder="Pekerjaan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <select name="JENIS_KELAMIN" class="form-control" required>
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
                            <input id="TANGGAL_LAHIR_PASIEN" name="TANGGAL_LAHIR_PASIEN" type="date" class="form-control" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-money"></i>
                            </div>
                            <select name="METODE_PEMBAYARAN" class="form-control" required>
                                <option selected>Metode Pembayaran</option>
                                <option value="TUNAI">TUNAI</option>
                                <option value="JPS">JPS</option>
                                <option value="ASKES">ASKES</option>
                                <option value="BPJS">BPJS</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" name="submit">
                            Tambah
                        </button>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                            Kembali
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include '../main/footer.php' ?>
