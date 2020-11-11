<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'user';

    public function __construct()
    {
        $this->request = \Config\Services::request();
        $db = \Config\Database::connect();
        $this->builder = $db->table('user');
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->builder->getWhere(['username' => $username, 'password' => $password], 1);

        if (count($user->getResultArray()) == 1) {
            $data = [
                'username' => $user->getRow()->username,
                'nama' => $user->getRow()->nama,
                'logged_in' => true
            ];
            session()->set($data);
            return true;
        } else
            return false;
    }
}