<?php

namespace App\Models;

use CodeIgniter\Model;

class DomainModel extends Model
{
    protected $table      = 'list_subdomain';
    protected $useTimestamps = true;
    protected $allowedFields = ['no_registrasi', 'sub_domain', 'slug', 'owner', 'tipe', 'unitkerja_uptd', 'lokasi_hosting', 'ip_address', 'penanggung_jawab', 'status', 'deskripsi_fituraplikasi', 'bahasa_pemograman', 'framework_cms', 'database', 'type_operating_system', 'operating_system_server', 'tahun_dibuat', 'pic', 'keterangan', 'created_at', 'last_update'];

    public function getDomain($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
