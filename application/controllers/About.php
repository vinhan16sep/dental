<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
		$this->load->model('partner_model');
		$this->load->model('qna_model');
		$this->load->model('content_model');
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

		$this->data['ABOUT_DESC_1'] = $this->content_model->get_content_by_type('ABOUT_DESC_1')['content'];
		$this->data['ABOUT_DESC_2'] = $this->content_model->get_content_by_type('ABOUT_DESC_2')['content'];
		$this->data['ABOUT_DESC_3'] = $this->content_model->get_content_by_type('ABOUT_DESC_3')['content'];

		$this->data['ABOUT_VIDEO'] = $this->content_model->get_content_by_type('ABOUT_VIDEO')['content'];

		$this->data['PARTNER'] = $this->content_model->get_content_by_type('PARTNER')['content'];

		$this->data['faqs'] = $this->qna_model->get_active();

		$this->data['partners'] = $this->partner_model->fetch_all(10);

        $this->render('about_view');
	}

	public function getFaqById($id)
	{
		$faq = $this->qna_model->get_qna_by_id($id);

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['faq' => $faq])));
	}
}
