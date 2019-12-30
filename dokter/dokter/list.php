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

<div class="content mt-3"> 
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <a type="button" data-target="#ModalAdd" data-toggle="modal" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No Hp</th>
                                    <th>Alamat</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $data = mysqli_query($koneksi,"SELECT * from tb_user WHERE LEVEL in ('dokter')");
                                while($d = mysqli_fetch_array($data)){?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $d['NAMA_LENGKAP']?></td>
                                        <td><?php echo $d['STATUS']?></td>
                                        <td><?php echo $d['TANGGAL_LAHIR']?></td>
                                        <td><?php echo $d['NO_TLP']?></td>
                                        <td><?php echo $d['ALAMAT']?></td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="?act=detail&id=<?php echo $d['ID_USER'] ?>" id=><i class="fa fa-info"></i></a>
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
                <form action="dokter?act=tambah_action" name="modal_popup" enctype="multipart/form-data" method="POST">
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