<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
	}

    public function index()
	{
		$this->data['the_view_title'] = 'About us';
		$this->data['the_view_css'] = [
			'assets/plugins/swiper/css/swiper-bundle.min.css',
			'assets/scss/pages/css/min/about.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/swiper/js/swiper-bundle.min.js',
			'assets/plugins/isotope/imagesloaded.pkgd.min.js',
			'assets/plugins/isotope/isotope.pkgd.min.js',
			'assets/js/about/function.min.js'
		];

		$this->data['product_categories'] = [
			0 => 'Ghế nha khoa - Máy nén',
			1 => 'Tay khoan nha khoa',
			2 => 'Thiết bị - Phụ tùng',
			3 => 'Laboratory',
			4 => 'Vật tư - Dụng cụ',
		];

        $this->render('about_view');
	}
}
