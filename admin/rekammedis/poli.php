<div class="card-body">
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#poli-umum" role="tab" aria-controls="custom-nav-home" aria-selected="true">Poli Umum</a>
                                <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#poli-gigi" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Poli Gigi</a>
                                <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#poli-kia" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Poli KIA</a>
                                <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#poli-akupuntur" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Poli Akupuntur</a>
                                <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#poli-p2m" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Poli P2M</a>
                                <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#sanitasi-klinis" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Sanitasi Klinis</a>
                                <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#konseling-gizi" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Konseling Gizi</a>
                            </div>
                        </nav>
                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="poli-umum" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Umur</th>
                                        <th>Anamnesa</th>
                                        <th>Fisik</th>
                                        <th>Diagnosa</th>
                                        <th>Tindakan</th>
                                        <th>Kode ICX</th>
                                        <th>Jenis Kasus</th>
                                        <th>Konseling</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $id = $_GET['id'];
                                    $data = mysqli_query($koneksi,"select * from poli_umum where ID_PASIEN='$id'");
                                    while($rm = mysqli_fetch_array($data)){?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?=date('d-m-Y', strtotime($rm['TANGGAL_UMUM']))?></td>
                                            <td><?php echo $rm['UMUR_UMUM']?></td>
                                            <td><?php echo $rm['ANAMNESA_UMUM']?></td>
                                            <td><?php echo $rm['PFISIK_UMUM']?></td>
                                            <td><?php echo $rm['DIAGNOSA_UMUM']?></td>
                                            <td><?php echo $rm['TINDAKAN_UMUM']?></td>
                                            <td><?php echo $rm['KODEICX_UMUM']?></td>
                                            <td><?php echo $rm['JENISKASUS_UMUM']?></td>
                                            <td><?php echo $rm['KONSELING_UMUM']?></td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                            <div class="tab-pane fade" id="poli-gigi" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                        <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Umur</th>
                                    <th>Anamnesa</th>
                                    <th>Tindakan</th>
                                    <th>Pengobatan</th>
                                    <th>Diagnosa</th>
                                    <th>Kode ICX</th>
                                    <th>Jenis Kasus</th>
                                    <th>Konseling</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $id = $_GET['id'];
                                $data = mysqli_query($koneksi,"SELECT * FROM poli_gigi WHERE ID_PASIEN='$id'");
                                while($rm = mysqli_fetch_array($data)){?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?=date('d-m-Y', strtotime($rm['TANGGAL_GIGI']))?></td>
                                        <td><?php echo $rm['UMUR_GIGI']?></td>
                                        <td><?php echo $rm['ANAMNESA_GIGI']?></td>
                                        <td><?php echo $rm['TINDAKAN_GIGI']?></td>
                                        <td><?php echo $rm['PENGOBATAN_GIGI']?></td>
                                        <td><?php echo $rm['DIAGNOSA_GIGI']?></td>
                                        <td><?php echo $rm['KODEICX_GIGI']?></td>
                                        <td><?php echo $rm['JENISKASUS_GIGI']?></td>
                                        <td><?php echo $rm['KONSELING_GIGI']?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                            <div class="tab-pane fade" id="poli-kia" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Jam</th>
                                    <th>Anamnesa</th>
                                    <th>Diagnosa</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $id = $_GET['id'];
                                $data = mysqli_query($koneksi,"SELECT * FROM poli_kia WHERE ID_PASIEN='$id'");
                                while($rm = mysqli_fetch_array($data)){?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $rm['TANGGAL_KIA']?></td>
                                        <td><?php echo $rm['JAM_KIA']?></td>
                                        <td><?php echo $rm['ANAMNESA_KIA']?></td>
                                        <td><?php echo $rm['DIAGNOSA_KIA']?></td>
                                        <td><?php echo $rm['KETERANGAN_KIA']?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>    
                        </div>
                        <div class="tab-pane fade" id="poli-akupuntur" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                        <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Umur</th>
                                        <th>Keluhan 1</th>
                                        <th>Keluhan 2</th>
                                        <th>Diagmedis</th>
                                        <th>Diagnosa</th>
                                        <th>Tindakan</th>
                                        <th>Konseling</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $id = $_GET['id'];
                                    $data = mysqli_query($koneksi,"SELECT * FROM poli_akupuntur WHERE ID_PASIEN='$id'");
                                    while($rm = mysqli_fetch_array($data)){?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $rm['TANGGAL_AKUPUNTUR']?></td>
                                            <td><?php echo $rm['UMUR_AKUPUNTUR']?></td>
                                            <td><?php echo $rm['KELUHAN1_AKUPUNTUR']?></td>
                                            <td><?php echo $rm['KELUHAN2_AKUPUNTUR']?></td>
                                            <td><?php echo $rm['DIAGMEDIS_AKUPUNTUR']?></td>
                                            <td><?php echo $rm['DIAGNOSA_AKUPUNTUR']?></td>
                                            <td><?php echo $rm['TINDAKAN_AKUPUNTUR']?></td>
                                            <td><?php echo $rm['KONSELING_AKUPUNTUR']?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                            </div>
                            <div class="tab-pane fade" id="poli-p2m" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                            <div class="card-body">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal Periksa</th>
                                            <th>Umur</th>
                                            <th>Penyakit</th>
                                            <th>Lingkungan</th>
                                            <th>Saran</th>
                                            <th>Tindakan</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $id = $_GET['id'];
                                        $data = mysqli_query($koneksi,"SELECT * FROM poli_p2m WHERE ID_PASIEN='$id'");
                                        while($rm = mysqli_fetch_array($data)){?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $rm['TANGGAL_P2M']?></td>
                                                <td><?php echo $rm['UMUR_P2M']?></td>
                                                <td><?php echo $rm['PENYAKIT_P2M']?></td>
                                                <td><?php echo $rm['LINGKUNGAN_P2M']?></td>
                                                <td><?php echo $rm['SARAN_P2M']?></td>
                                                <td><?php echo $rm['TINDAKAN_P2M']?></td>
                                                <td><?php echo $rm['KETERANGAN_P2M']?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="sanitasi-klinis" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                            <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Umur</th>
                                        <th>Penyakit</th>
                                        <th>Masalah Lingkungan</th>
                                        <th>Saran</th>
                                        <th>Tindakan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $id = $_GET['id'];
                                    $data = mysqli_query($koneksi,"SELECT * FROM sanitasi_klinis WHERE ID_PASIEN='$id'");
                                    while($rm = mysqli_fetch_array($data)){?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $rm['TANGGAL_KLINIS']?></td>
                                            <td><?php echo $rm['UMUR_KLINIS']?></td>
                                            <td><?php echo $rm['PENYAKIT_KLINIS']?></td>
                                            <td><?php echo $rm['MASALAHLINGKUNGAN_KLINIS']?></td>
                                            <td><?php echo $rm['SARAN_KLINIS']?></td>
                                            <td><?php echo $rm['TINDAKAN_KLINIS']?></td>
                                            <td><?php echo $rm['KETERANGAN_KLINIS']?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="konseling-gizi" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                            <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Umur</th>
                                        <th>Diagnosa</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>LAB</th>
                                        <th>Klinis</th>
                                        <th>Pantangan</th>
                                        <th>Diet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $id = $_GET['id'];
                                    $data = mysqli_query($koneksi,"SELECT * FROM konseling_gizi WHERE ID_PASIEN='$id'");
                                    while($rm = mysqli_fetch_array($data)){?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $rm['TANGGAL_GIZI']?></td>
                                            <td><?php echo $rm['UMUR_GIZI']?></td>
                                            <td><?php echo $rm['DIAGNOSA_GIZI']?></td>
                                            <td><?php echo $rm['BB_GIZI']?></td>
                                            <td><?php echo $rm['TB_GIZI']?></td>
                                            <td><?php echo $rm['LAB_GIZI']?></td>
                                            <td><?php echo $rm['KLINIS_GIZI']?></td>
                                            <td><?php echo $rm['PANTANGAN_GIZI']?></td>
                                            <td><?php echo $rm['DIET_GIZI']?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>