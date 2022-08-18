<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
	}

    public function index()
	{
		$this->data['the_view_title'] = 'Service List';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/service.min.css'
		];
		$this->data['the_view_js'] = [];

		$this->data['product_categories'] = [
			0 => 'Ghế nha khoa - Máy nén',
			1 => 'Tay khoan nha khoa',
			2 => 'Thiết bị - Phụ tùng',
			3 => 'Laboratory',
			4 => 'Vật tư - Dụng cụ',
		];

        $this->render('service_view');
	}

	public function detail()
	{
		$this->data['the_view_title'] = 'Service Detail';
		$this->data['the_view_css'] = [
			'assets/plugins/swiper/css/swiper-bundle.min.css',
			'assets/scss/pages/css/min/service_detail.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/swiper/js/swiper-bundle.min.js',
			'assets/js/service_detail/function.min.js'
		];

		$this->render('service_detail_view');
	}
}
