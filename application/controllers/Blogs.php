<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Public_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('news_model');

        $this->load->library('session');
	}

    public function index()
	{
		$this->data['the_view_title'] = 'Blogs';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/blog.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/isotope/imagesloaded.pkgd.min.js',
			'assets/plugins/isotope/isotope.pkgd.min.js',
			'assets/js/blog/function.min.js'
		];

		$this->data['blogs'] = $this->news_model->get_all();

        $this->render('blog_view');
	}

	public function detail($slug)
	{
		$this->data['the_view_title'] = 'Blogs Detail';
		$this->data['the_view_css'] = [
			'assets/plugins/swiper/css/swiper-bundle.min.css',
			'assets/scss/pages/css/min/blog_detail.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/swiper/js/swiper-bundle.min.js',
			'assets/js/blog_detail/function.min.js'
		];

    	$detail = $this->news_model->get_by_slug($slug);
        if ( !empty($detail) ) {
            $this->data['detail'] = $detail;
			$this->data['blogs'] = $this->news_model->fetch_relate($detail['id'], 5);

			$this->render('blog_detail_view');
        } else {
            redirect('/','refresh');
        }

	}
}
