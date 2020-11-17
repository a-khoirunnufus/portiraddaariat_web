<?php 
namespace App\Controllers;
use App\Models\PostModel;

class Home extends BaseController
{
	protected $postModel;

	public function __construct() {
        $this->postModel = new PostModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Homepage',
			'post' => $this->postModel->orderBy('created_at', 'desc')->findAll(5,0)
		];

		return view('Public/HomepageView', $data);
	}

	public function detail($slug) {
		$data = [
                'title' => 'Detail'
            ];
		return view('Public/DetailActivityViewTemp', $data);
        $post = $this->postModel->getPost($slug);
        if ($post) {
            $data = [
                'title' => 'Detail Kegiatan - ' . $post['judul'],
                'post' => $post
            ];
            
            return view('Public/DetailActivityView', $data);
        }

        echo 'data tidak ada';
    }

    public function list_kegiatan(){
    	$data = [
                'title' => 'List Kegiatan'
        ];
    	return view('Public/ListKegiatanView',$data);
    }

    public function about(){
    	$data = [
                'title' => 'Tentang Kami'
        ];
    	return view('Public/AboutView',$data);
    }

    public function donasi(){
    	$data = [
                'title' => 'Donasi'
        ];
    	return view('Public/DonasiView',$data);
    }

    public function bantuan(){
    	$data = [
                'title' => 'Bantuan'
        ];
    	return view('Public/BantuanView',$data);
    }

	//--------------------------------------------------------------------

}
