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
            return redirect()->to(route_to('index'));
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
        return redirect()->to(route_to('create'));
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
            return redirect()->to(route_to('create'))->withInput();
        else {
            helper('text');
            do {
                $ucode = random_string('alnum', 7);
                $eksis = $this->postModel->where('u_code', $ucode)->first()['u_code'] == $ucode;
            } while ($eksis);
            $this->postModel->save([
                'u_code' => $ucode,
                'judul' => $this->request->getVar('judul'),
                'slug' => url_title($this->request->getVar('judul'), '-', true),
                'lokasi' => $this->request->getVar('lokasi'),
                'tanggal' => $this->request->getVar('tanggal'),
                'deskripsi' => $this->request->getVar('deskripsi')
            ]);
            $this->session->setFlashData('notif', ['status' => 'success', 'msg' => 'Berhasil menambahkan kegiatan.']);
            return redirect()->to(route_to('posts'));
        }
    }

    public function posts() {
        $data = [
            'title' => 'Daftar Kegiatan',
            'post' => $this->postModel->getPost(),
            'notif' => $this->session->getFlashData('notif')
        ];

        return view('Admin/PostsView', $data);
    }

    public function detail($slug) {
        $post = $this->postModel->getPost($slug);
        if ($post) {
            $data = [
                'title' => 'Detail Kegiatan - ' . $post['judul'],
                'post' => $post
            ];
            
            return view('Admin/DetailView', $data);
        }
        $this->session->setFlashData('notif', ['status' => 'danger', 'msg' => 'Terjadi kesalahan.']);
        return redirect()->to(route_to('posts'));
    }

    public function destroy($slugs) {
        $slug = explode('-', $slugs);
        $code = array_pop($slug);
        $post =  $this->postModel->where(['u_code' => $code, 'slug' => implode('-', $slug)]);
        $post->delete();

        $this->session->setFlashData('notif', ['status' => 'success', 'msg' => 'Berhasil menghapus kegiatan.']);
        return redirect()->to(route_to('posts'));
    }

}
