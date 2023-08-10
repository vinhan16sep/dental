<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends Public_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('service_model');
		$this->load->model('content_model');

        $this->load->library('session');
	}

    public function index()
	{
		$this->data['the_view_title'] = 'Service List';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/service.min.css'
		];
		$this->data['the_view_js'] = [];
		
		$this->data['SERVICE_DESC'] = $this->content_model->get_content_by_type('SERVICE_DESC')['content'];

		$this->data['services'] = $this->service_model->get_all();

        $this->render('service_view');
	}

	public function detail($slug)
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

    	$detail = $this->service_model->get_by_slug($slug);
        if ( !empty($detail) ) {
            $this->data['detail'] = $detail;
			$this->data['services'] = $this->service_model->fetch_relate($detail['id'], 5);

			$this->render('service_detail_view');
        } else {
            redirect('/','refresh');
        }

	}
}
