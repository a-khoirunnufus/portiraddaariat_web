<?php
namespace App\Models;
use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'kegiatan';
    protected $allowedFields = ['judul', 'slug', 'lokasi', 'tanggal', 'deskripsi'];
    protected $useTimestamps = true;

}