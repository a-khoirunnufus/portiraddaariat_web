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
        $post = $this->postModel->getPost($slug);
        if ($post) {
            $data = [
                'title' => 'Detail Kegiatan - ' . $post['judul'],
                'post' => $post
            ];
            
            return view('Public/DetailActivityView', $data);
        }
    }

	//--------------------------------------------------------------------

}
