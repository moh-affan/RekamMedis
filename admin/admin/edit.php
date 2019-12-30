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
                    <li class="active">Admin</li>
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
                        $data = mysqli_query($koneksi,"SELECT * from tb_user where ID_USER='$id'");
                        while($pasien = mysqli_fetch_array($data)){?>
                       <form action="?act=edit_action" name="modal_popup" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label>Id</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="ID_USER" type="hidden" class="form-control" placeholder="ID" value="<?php echo $pasien['ID_USER'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="USERNAME" type="text" class="form-control" placeholder="Username" value="<?php echo $pasien['USERNAME'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="PASSWORD" type="text" class="form-control" placeholder="Password" value="<?php echo $pasien['PASSWORD'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="NAMA_LENGKAP" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pasien['NAMA_LENGKAP'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input name="STATUS" type="text" class="form-control" placeholder="Status" value="<?php echo $pasien['STATUS'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="TANGGAL_LAHIR" name="TANGGAL_LAHIR" type="date" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $pasien['TANGGAL_LAHIR'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No. Hp</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone-square"></i>
                                    </div>
                                    <input name="NO_TLP" type="text" class="form-control" placeholder="Nomor Handphone" value="<?php echo $pasien['NO_TLP'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <input name="ALAMAT" type="text" class="form-control" placeholder="Alamat" value="<?php echo $pasien['ALAMAT'] ?>" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit" name="submit">
                                    Tambah
                                </button>
                                
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