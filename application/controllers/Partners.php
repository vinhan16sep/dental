<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
	}

	public function index(){
		$this->data['the_view_title'] = 'Partners';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/partner.min.css'
		];
		$this->data['the_view_js'] = [
			// 'assets/js/partner/function.min.js'
		];

        $this->render('partner_view');
	}

	public function detail(){
		$this->data['the_view_title'] = 'Partners';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/partner_detail.min.css'
		];
		$this->data['the_view_js'] = [
			// 'assets/js/partner/function.min.js'
		];

        $this->render('partner_detail_view');
	}
}