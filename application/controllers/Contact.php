<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
	}

    public function index()
	{
		$this->data['the_view_title'] = 'Contact us';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/contact.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/js/contact/function.min.js'
		];

		$this->data['product_categories'] = [
			0 => 'Ghế nha khoa - Máy nén',
			1 => 'Tay khoan nha khoa',
			2 => 'Thiết bị - Phụ tùng',
			3 => 'Laboratory',
			4 => 'Vật tư - Dụng cụ',
		];

        $this->render('contact_view');
	}
}
