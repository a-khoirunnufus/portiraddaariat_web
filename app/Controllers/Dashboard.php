<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct() {
	}

	public function index() {
        if ($this->session->logged_in) {
            return view('Admin/DashboardView');
        }
        else
            return redirect()->to('/admin');
	}

}
