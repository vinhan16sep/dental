<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Public_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('product_model');
		$this->load->model('product_category_model');
		$this->load->model('origin_model');
		$this->load->model('brand_model');

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

		$this->data['product_categories'] = $this->product_category_model->get_active();
		$this->data['origins'] = $this->origin_model->get_active();
		$this->data['brands'] = $this->brand_model->get_active();
		$this->data['products'] = $this->product_model->fetch_all();
		$this->data['focus_products'] = $this->product_model->fetch_all_focus();

        $this->render('product_view');
	}

	public function detail($slug)
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

    	$detail = $this->product_model->get_by_slug($slug);
        if ( !empty($detail) ) {
            $this->data['detail'] = $detail;
			$this->render('product_detail_view');
        } else {
            redirect('/','refresh');
        }

	}

	public function getProductByCategory()
	{
		$category = $this->input->get('category');

		$products = $this->product_model->get_focus_by_category_id($category, 10);

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['products' => $products])));
	}
}
