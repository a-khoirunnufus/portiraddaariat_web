<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'password', 'nama'];
}