<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
	}

    public function index()
	{
		$this->data['the_view_title'] = 'Blogs';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/blog.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/isotope/imagesloaded.pkgd.min.js',
			'assets/plugins/isotope/isotope.pkgd.min.js',
			'assets/js/blog/function.min.js'
		];

		$this->data['product_categories'] = [
			0 => 'Ghế nha khoa - Máy nén',
			1 => 'Tay khoan nha khoa',
			2 => 'Thiết bị - Phụ tùng',
			3 => 'Laboratory',
			4 => 'Vật tư - Dụng cụ',
		];

        $this->render('blog_view');
	}

	public function detail()
	{
		$this->data['the_view_title'] = 'Blogs Detail';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/blog_detail.min.css'
		];
		$this->data['the_view_js'] = [];

		$this->render('blog_detail_view');
	}
}
