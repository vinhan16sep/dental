<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends Public_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('partner_model');
		$this->load->model('partner_origin_model');
        $this->load->library('session');
	}

	public function index(){
		$this->data['the_view_title'] = 'Partners';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/partner.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/js/partner/function.min.js'
		];

        $this->data['origins'] = $this->partner_origin_model->get_all();
		$this->data['partners'] = $this->partner_model->get_all();

        $this->render('partner_view');
	}

	public function detail($slug)
	{
		$this->data['the_view_title'] = 'Partners Detail';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/partner_detail.min.css'
		];
		$this->data['the_view_js'] = [
			// 'assets/js/partner/function.min.js'
		];

    	$detail = $this->partner_model->get_by_slug($slug);
        if ( !empty($detail) ) {
            $this->data['detail'] = $detail;
			$this->data['partners'] = $this->partner_model->fetch_relate($detail['id'], 5);

			$this->render('partner_detail_view');
        } else {
            redirect('/','refresh');
        }
	}

	public function getPartnerByOriginId($id)
	{
		$partners = $this->partner_model->get_by_origin_id($id);

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['partners' => $partners])));
	}
}