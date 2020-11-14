<?php
namespace App\Models;
use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'kegiatan';
    protected $allowedFields = ['u_code', 'judul', 'slug', 'lokasi', 'tanggal', 'deskripsi'];
    protected $useTimestamps = true;

    public function getPost($segment = false) {
        if (! $segment)
            return $this->orderBy('created_at', 'desc')->findAll();

        $slug = explode('-', $segment);
        $code = array_pop($slug);
        return $this->where(['u_code' => $code, 'slug' => implode('-', $slug)])->first();
    }
}