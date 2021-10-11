<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Subdomain</h1>

    <form action="/domain/update/<?= $domain['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $domain['slug']; ?>">
        <input type="hidden" name="fotoLama" value="<?= $domain['pic']; ?>">
        <!-- <div class="form-group row">
            <label for="inputNoRegistrasi" class="col-sm-10 col-form-label">No Registrasi</label>
            <div class="col-sm-10">
                <input type="noregistrasi" class="form-control" id="inputNoRegistrasi">
            </div>
        </div> -->
        <div class="form-group row">
            <label for="inputNamaSubdomain" class="col-sm-10 col-form-label">Nama Subdomain</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('sub_domain')) ? 'is-invalid' : ''; ?>" id="sub_domain" name="sub_domain" autofocus value="<?= (old('sub_domain')) ? old('sub_domain') : $domain['sub_domain'] ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('sub_domain'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputOwner" class="col-sm-10 col-form-label">Owner</label>
            <div class="col-sm-10">
                <select class="form-control" id="owner" name="owner" aria-label="multiple select example">
                    <option selected><?= ($domain['owner'] != null) ? $domain['owner'] : '-Owner-'; ?></option>
                    <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                    <option value="Badan Kesatuan Bangsa dan Politik">Badan Kesatuan Bangsa dan Politik</option>
                    <option value="Badan Penanggulangan Bencana Daerah">Badan Penanggulangan Bencana Daerah</option>
                    <option value="Badan Pendapatan Daerah">Badan Pendapatan Daerah</option>
                    <option value="Badan Penelitian dan Pengembangan Daerah">Badan Penelitian dan Pengembangan Daerah</option>
                    <option value="Badan Pengelolaan Keuangan dan Aset">Badan Pengelolaan Keuangan dan Aset</option>
                    <option value="Badan Pengembangan Sumber Daya Manusia">Badan Pengembangan Sumber Daya Manusia</option>
                    <option value="Badan Penghubung">Badan Penghubung</option>
                    <option value="Badan Perencanaan dan Pembangunan Daerah">Badan Perencanaan dan Pembangunan Daerah</option>
                    <option value="Biro Administrasi Pimpinan">Biro Administrasi Pimpinan</option>
                    <option value="Biro BUMD, Investasi dan Administrasi Pembangunan">Biro BUMD, Investasi dan Administrasi Pembangunan</option>
                    <option value="Biro Hukum dan Hak Asasi Manusia">Biro Hukum dan Hak Asasi Manusia</option>
                    <option value="Biro Kesejahteraan Rakyat">Biro Kesejahteraan Rakyat</option>
                    <option value="Biro Organisasi">Biro Organisasi</option>
                    <option value="Biro Pemerintah dan Otonomi Daerah">Biro Pemerintah dan Otonomi Daerah</option>
                    <option value="Biro Pengadaan Barang dan Jasa">Biro Pengadaan Barang dan Jasa</option>
                    <option value="Biro Perekonomian">Biro Perekonomian</option>
                    <option value="Biro Umum">Biro Umum</option>
                    <option value="Dinas Bina Marga dan Penataan Ruang">Dinas Bina Marga dan Penataan Ruang</option>
                    <option value="Dinas Energi dan Sumber Daya Mineral">Dinas Energi dan Sumber Daya Mineral</option>
                    <option value="Dinas Kehutanan">Dinas Kehutanan</option>
                    <option value="Dinas Kelautan dan Perikanan">Dinas Kelautan dan Perikanan</option>
                    <option value="Dinas Kependudukan dan Pencatatan Sipil">Dinas Kependudukan dan Pencatatan Sipil</option>
                    <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                    <option value="Dinas Ketahanan Pangan dan Peternakan">Dinas Ketahanan Pangan dan Peternakan</option>
                </select>
            </div>
        </div>
        <!-- <div class="form-group row">
            <label for="inputTipe" class="col-sm-10 col-form-label">Tipe</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tipe" name="tipe" autofocus value="">
            </div>
        </div> -->
        <div class="form-group row">
            <div class="col-sm-3">
                <label for="inputTipe" class="col-sm col-form-label">Tipe</label>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipe" id="tipe1" value="Aplikasi" <?= ($domain['tipe'] == 'Aplikasi') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="tipe1">
                            Aplikasi
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipe" id="tipe2" value="Website" <?= ($domain['tipe'] == 'Website') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="tipe2">
                            Website
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <label for="inputUnitKerja" class="col-sm col-form-label">Unit Kerja</label>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="unitkerja_uptd" id="unitkerja1" value="Unit Kerja" <?= ($domain['unitkerja_uptd'] == 'Unit Kerja') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="unitkerja1">
                            Unit Kerja
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="unitkerja_uptd" id="unitkerja2" value="UPTD" <?= ($domain['unitkerja_uptd'] == 'UPTD') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="unitkerja2">
                            UPTD
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <label for="inputStatus" class="col-sm col-form-label">Status</label>
                <div class="col-sm">
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="status" id="status1" value="Aktif" <?= ($domain['status'] == 'Aktif') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="status1">
                            Aktif
                        </label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="status" id="status2" value="Deaktivasi" <?= ($domain['status'] == 'Deaktivasi') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="status2">
                            Deaktivasi
                        </label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="status" id="status3" value="Penonaktifan Sementara" <?= ($domain['status'] == 'Penonaktifan Sementara') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="status3">
                            Penonaktifan Sementara
                        </label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="status" id="status4" value="Perlu Konfirmasi" <?= ($domain['status'] == 'Perlu Konfirmasi') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="status4">
                            Perlu Konfirmasi
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="form-group row">
            <label for="inputUnitKerja" class="col-sm-10 col-form-label">Unit Kerja</label>
            <div class="col-sm-10">
                <input type="unitkerja" class="form-control" id="inputUnitKerja">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputLokasiHosting" class="col-sm-10 col-form-label">Lokasi Hosting</label>
            <div class="col-sm-10">
                <input type="lokasihosting" class="form-control" id="inputLokasiHosting">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputIpAddress" class="col-sm-10 col-form-label">IP Address</label>
            <div class="col-sm-10">
                <input type="ippaddress" class="form-control" id="inputIpAddress">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPenanggungJawab" class="col-sm-10 col-form-label">Penanggung Jawab</label>
            <div class="col-sm-10">
                <input type="penanggungjawab" class="form-control" id="inputPenanggungJawab">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputStatus" class="col-sm-10 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="status" class="form-control" id="inputStatus">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDeskripsiFiturAplikasi" class="col-sm-10 col-form-label">Deskripsi Fitur Aplikasi</label>
            <div class="col-sm-10">
                <input type="deskripsifituraplikasi" class="form-control" id="inputDeskripsiFiturAplikasi">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputBahasaPemrograman" class="col-sm-10 col-form-label">Bahasa Pemrograman</label>
            <div class="col-sm-10">
                <input type="bahasapemrograman" class="form-control" id="inputBahasaPemrograman">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFrameworkCMS" class="col-sm-10 col-form-label">Framework CMS</label>
            <div class="col-sm-10">
                <input type="frameworkcms" class="form-control" id="inputFrameworkCMS">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDatabase" class="col-sm-10 col-form-label">Database</label>
            <div class="col-sm-10">
                <input type="database" class="form-control" id="inputDatabase">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTipeOperatingSystem" class="col-sm-10 col-form-label">Tipe Operating System</label>
            <div class="col-sm-10">
                <input type="tipeoperatingsystem" class="form-control" id="inputTipeOperatingSystem">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputOperatingSystemServer" class=" col-sm-10 col-form-label">Operating System Server</label>
            <div class="col-sm-10">
                <input type="operatingsystemserver" class="form-control" id="inputOperatingSystemServer">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTahunDibuat" class="col-sm-10 col-form-label">Tahun Dibuat</label>
            <div class="col-sm-10">
                <input type="tahundibuat" class="form-control" id="inputTahunDibuat">
            </div>
        </div> -->
        <!-- <div class="form-group row">
            <label for="inputKeterangan" class="col-sm-10 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="keterangan" class="form-control" id="inputKeterangan">
            </div>
        </div> -->
        <div class="form-group row">
            <label for="foto" class="col-sm-10 col-form-label">Sampul</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="/img/default_domainpic.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <label class="custom-file-label" for="Foto">Pilih gambar..</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
                <a href="/domain/<?= $domain['slug']; ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>