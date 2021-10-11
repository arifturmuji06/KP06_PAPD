<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">


    <h2 class="h3 mb-4 text-gray-800">Detail Subdomain
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="/domain/edit/<?= $domain['slug']; ?>" class="btn btn-success active" aria-current="page">Edit</a>
        </div>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="<?= base_url('domain'); ?>" class="btn btn-success active" aria-current="page">Kembali</a>
        </div>
    </h2>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="card" style="width: 50%;">
        <img src="<?= base_url(); ?>/img/<?= $domain['pic']; ?>" alt="..." class="card-img-subdomain">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <table class="table table-none">
                    <tbody>
                        <tr>
                            <th scope="row">Subdomain</th>
                            <td><?= $domain['sub_domain']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Owner</th>
                            <td><?= $domain['owner']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tipe</th>
                            <td><?= $domain['tipe']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Unit Kerja</th>
                            <td><?= $domain['unitkerja_uptd']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Lokasi Hosting</th>
                            <td><?= $domain['lokasi_hosting']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">IP Address</th>
                            <td><?= $domain['ip_address']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Penanggung Jawab</th>
                            <td><?= $domain['penanggung_jawab']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td><?= $domain['status']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Deskripsi Fitur Aplikasi</th>
                            <td><?= $domain['deskripsi_fituraplikasi']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Bahasa Pemrograman</th>
                            <td><?= $domain['bahasa_pemograman']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Framework CMS</th>
                            <td><?= $domain['framework_cms']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Database</th>
                            <td><?= $domain['database']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tipe Operating system</th>
                            <td><?= $domain['type_operating_system']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Operating System Server</th>
                            <td><?= $domain['operating_system_server']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tahun Dibuat</th>
                            <td><?= $domain['tahun_dibuat']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Keterangan</th>
                            <td><?= $domain['keterangan']; ?></td>
                        </tr>

                    </tbody>
                </table>
            </ul>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>