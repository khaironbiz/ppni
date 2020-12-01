<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1><?= $title ?></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->

                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="user-profile">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="user-photo m-b-30">
                                                <img class="img-fluid" src="<?= base_url('template/wpu/img/profile/') . $user['image']; ?>" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <table class="table table-hover ">
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>: <?= $user['gelar_depan'] . " " . $user['name'] . "," . $user['gelar_belakang']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>NIK</td>
                                                    <td>: <?= $user['nik']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>: <?= $user['sex']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>TTL</td>
                                                    <td>: <?= $user['kota_lahir'] . ", " . $user['tgl_lahir']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>: <?= $user['alamat'] . ", " . $desa['desaNama']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>: <?= $kec['nama_kec'] . ", " . $kota['nama_kabkot'] . ", " . $prov['nama_prov'] . " " . $desa['kodepos']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="badge badge-primary">Edit</span></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-lg-5">
                                            <table class="table table-hover ">
                                                <tr>
                                                    <td>Email</td>
                                                    <td>: <?= $user['email']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>HP</td>
                                                    <td>: <?= $user['hp']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>NIRA</td>
                                                    <td>: <?= $user['nira']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>DPW</td>
                                                    <td>: <?= $dpw['nama_prov']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td>: <?= $user['pendidikan']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td>Perguruan Tinggi</td>
                                                    <td>: <?= $user['universitas']; ?></td>
                                                    <td>|</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="badge badge-primary">Edit</span></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Riwayat Pendidikan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenjang</th>
                                                <th>Nama Institusi</th>
                                                <th>Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span class="badge badge-primary">Ongoing</span></td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Riwayat Pekerjaan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Istitusi</th>
                                                <th>Jabatan</th>
                                                <th>Mulai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span class="badge badge-primary">Ongoing</span></td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Riwayat Penghargaan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Penghargaan</th>
                                                <th>Nama Institusi</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span class="badge badge-primary">Ongoing</span></td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->

                    <!-- /# column -->
                </div>
            </section>
        </div>
    </div>
</div>