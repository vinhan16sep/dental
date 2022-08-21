<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
	}

    public function index()
	{
		$this->data['the_view_title'] = 'Search';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/search.min.css'
		];
		$this->data['the_view_js'] = [];

		$this->data['product_categories'] = [
			0 => 'Ghế nha khoa - Máy nén',
			1 => 'Tay khoan nha khoa',
			2 => 'Thiết bị - Phụ tùng',
			3 => 'Laboratory',
			4 => 'Vật tư - Dụng cụ',
		];

        $this->render('search_view');
	}
}
