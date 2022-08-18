<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
	}

    public function index()
	{
		$this->data['the_view_title'] = 'Product List';
		$this->data['the_view_css'] = [
			'assets/plugins/swiper/css/swiper-bundle.min.css',
			'assets/plugins/animate/animate.css',
			'assets/scss/pages/css/min/product.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/swiper/js/swiper-bundle.min.js',
			'assets/plugins/wow/wow.min.js',
			'assets/js/product/function.min.js'
		];

		$this->data['product_categories'] = [
			0 => 'Ghế nha khoa - Máy nén',
			1 => 'Tay khoan nha khoa',
			2 => 'Thiết bị - Phụ tùng',
			3 => 'Laboratory',
			4 => 'Vật tư - Dụng cụ',
		];

        $this->render('product_view');
	}

	public function detail()
	{
		$this->data['the_view_title'] = 'Product Detail';
		$this->data['the_view_css'] = [
			'assets/plugins/swiper/css/swiper-bundle.min.css',
			'assets/plugins/animate/animate.css',
			'assets/scss/pages/css/min/product_detail.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/swiper/js/swiper-bundle.min.js',
			'assets/plugins/wow/wow.min.js',
			'assets/js/product_detail/function.min.js'
		];

		$this->render('product_detail_view');
	}
}
