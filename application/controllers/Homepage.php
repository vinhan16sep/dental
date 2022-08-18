<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
	}

    public function index(){
		$this->data['the_view_title'] = 'Homepage';
		$this->data['the_view_css'] = [
			'assets/plugins/swiper/css/swiper-bundle.min.css',
			'assets/plugins/animate/animate.css',
			'assets/scss/pages/css/min/homepage.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/swiper/js/swiper-bundle.min.js',
			'assets/plugins/wow/wow.min.js',
			'assets/js/homepage/function.min.js'
		];

		$this->data['product_categories'] = [
			0 => 'Ghế nha khoa - Máy nén',
			1 => 'Tay khoan nha khoa',
			2 => 'Thiết bị - Phụ tùng',
			3 => 'Laboratory',
			4 => 'Vật tư - Dụng cụ',
		];

        $this->render('homepage_view');
	}

	public function getHighlightByCategory()
	{
		$category = $this->input->get('category');
		echo $category;

		$html = $this->render('_ajax/_homepage_highlight');

		$this->response->setJson(['html' => $html]);
	}
}
