<?php
namespace App\Controllers;
use App\Models\AdminModel;

class Auth extends BaseController
{
    public function __construct() {
        $this->adminModel = new AdminModel();
        $this->validation = \Config\Services::validation();
	}

    public function index() {
        if ($this->session->logged_in)
            return redirect()->to('/admin/dashboard');
        else {
            $data = [
                'validation' => $this->validation
            ];
            return view('Admin/LoginView', $data);
        }
    }

    public function login() {
        $validate = [
            'username' => [
                'rule' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi.'
                ]
            ],
            'password' => [
                'rule' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.'
                ]
            ]
        ];

        if (! $this->validate($validate))
            return redirect()->to('/admin')->withInput()->with('validation', $this->validation);
        else {
            if ($this->adminModel->login())
                return redirect()->to('/admin/dashboard');
            else {
                $data = $this->session->setFlashData('fail', 'Username atau Password Salah.');
                return redirect()->to('/admin');
            }
        }
    }

    public function logout() {
        if ($this->session->logged_in) {
            $this->session->destroy();
            return redirect()->to('/admin');
        }
    }
}
