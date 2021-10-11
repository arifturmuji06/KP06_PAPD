<?= $this->extend('templates/indexDomain'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Subdomain List</h1>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sub Domain</h6>
                    <a href="<?= base_url('domain/create'); ?>" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Domain</span>
                    </a>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subdomain</th>
                                    <th>Owner</th>
                                    <th>Tipe</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($subdomains as $sd) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $sd['sub_domain']; ?></td>
                                        <td><?= $sd['owner']; ?></td>
                                        <td><?= $sd['tipe']; ?></td>
                                        <td><?= $sd['status']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="/domain/<?= $sd['slug']; ?>" class="btn btn-success">Detail</a>
                                            <a href="/domain/edit/<?= $sd['slug']; ?>" class="btn btn-success">Detail</a>
                                            <form action="/admin/deleteuser" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" id="sub_domainid" class="sub_domainid" name="sub_domainid" value="<?php //$user->userid; 
                                                                                                                                        ?>">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="modal fade col-mb-8" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Detail Subdomain</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card" style="width: auto;">
                            <img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="..." class="card-img-subdomain">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <table class="table table-none">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Subdomain</th>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Owner</th>
                                                <td><?= user()->fullname; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tipe</th>
                                                <td><?= user()->nik; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Unit Kerja</th>
                                                <td><?= user()->instansi; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Lokasi Hosting</th>
                                                <td><?= user()->email; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">IP Address</th>
                                                <td><?= user()->no_hp; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Penanggung Jawab</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Deskripsi Fitur Aplikasi</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bahasa Pemrograman</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Framework CMS</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Database</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tipe Operating system</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Operating System Server</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tahun Dibuat</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Keterangan</th>
                                                <td><?= user()->approval_status; ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <?php $totalJumlahTipe = 0 ?>
                <?php foreach ($tipes as $tp) : ?>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <?= $tp->tipe; ?></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tp->jumlah_tipe; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php $totalJumlahTipe += $tp->jumlah_tipe; ?>
                <?php endforeach; ?>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalJumlahTipe; ?></div>
                        </div>

                        <div class="col-auto">
                            <i class="fas fa-archive fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4 tipe-aplikasi">
            <div class="card border-left-success shadow h-100 py-2">
                <?php foreach ($unitKerja as $uk) : ?>
                    <?php if ($uk->unitkerja_uptd != null) : ?>
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?= $uk->unitkerja_uptd; ?></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $uk->jumlah_unitkerja; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <?php $totalJumlahLh = 0 ?>
                <?php foreach ($lokasiHosting as $lh) : ?>
                    <?php if ($lh->lokasi_hosting != null) : ?>
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?= $lh->lokasi_hosting; ?></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $lh->jumlah_lh; ?></div>
                                </div>
                            </div>
                        </div>
                        <?php $totalJumlahLh += $lh->jumlah_lh; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $totalJumlahLh; ?></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Kepemilikan Domain</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Owner</th>
                                    <th>Jumlah Domain</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pemilikDomain as $pemilik) : ?>
                                    <tr>
                                        <th><?= $pemilik->owner; ?></th>
                                        <td><?= $pemilik->jumlah; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Status Sub Domain</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: blue;"></i> Laravel
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: red;"></i> Code Igniter
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: orange;"></i> Symfoni
                        </span>
                        <br>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: green;"></i> Zend
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: purple;"></i> Yii 2
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: aqua;"></i> CakePHP
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: pink;"></i> FuelPHP
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: greenyellow;"></i> FatFree
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color: crimson;"></i> Aura
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>