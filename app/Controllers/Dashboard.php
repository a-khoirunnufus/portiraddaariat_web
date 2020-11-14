<?php
namespace App\Controllers;
use App\Models\PostModel;

class Dashboard extends BaseController
{
    protected $postModel;
    protected $validation;

    public function __construct() {
        $this->postModel = new PostModel();
        $this->validation = \Config\Services::validation();
	}

	public function index() {
        if ($this->session->logged_in) {
            $data = [
                'title' => 'Dashboard',
            ];
            return view('Admin/DashboardView', $data);
        }
        else
            return redirect()->to('/admin');
    }
    
    public function create() {
        if ($this->session->logged_in) {
            $data = [
                'title' => 'Kegiatan Baru',
                'validation' => $this->validation
            ];
            return view('Admin/CreateView', $data);
        }
        else
            return redirect()->to('/admin');
    }

    public function store() {
        $validate = [
            'judul' => [
                'rule' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi.'
                ]
            ],
            'lokasi' => [
                'rule' => 'required',
                'errors' => [
                    'required' => 'Lokasi harus diisi.'
                ]
            ],
            'tanggal' => [
                'rule' => 'required',
                'errors' => [
                    'required' => 'Tanggal harus diisi.'
                ]
            ],
            'deskripsi' => [
                'rule' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ]
        ];

        if (! $this->validate($validate))
            return redirect()->to('/admin/create')->withInput();
        else {
            $this->postModel->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => url_title($this->request->getVar('judul'), '-', true),
                'lokasi' => $this->request->getVar('lokasi'),
                'tanggal' => $this->request->getVar('tanggal'),
                'deskripsi' => $this->request->getVar('deskripsi')
            ]);
            $this->session->setFlashData('notif', ['status' => 'success', 'msg' => 'Berhasil menambahkan kegiatan.']);
            return redirect()->to('/admin/kegiatan');
        }
    }

    public function posts() {
        // $pager = \Config\Services::pager();
        $data = [
            'title' => 'Daftar Kegiatan',
            'post' => $this->postModel->orderBy('created_at', 'desc')->findAll(),
            'notif' => $this->session->getFlashData('notif')
        ];

        return view('Admin/PostsView', $data);
    }

}
