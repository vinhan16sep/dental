<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');

		$this->load->model('product_model');
		$this->load->model('news_model');
	}

    public function index(){
		$this->data['the_view_title'] = 'Homepage';
		$this->data['the_view_css'] = [
			'assets/plugins/swiper/css/swiper-bundle.min.css',
			'assets/plugins/animate/animate.css',
			'assets/scss/pages/css/min/homepage.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/plugins/swiper/js/swiper-bundle.min.js',
			'assets/plugins/wow/wow.min.js',
			'assets/js/homepage/function.min.js'
		];

		$this->data['flashSales'] = $this->product_model->fetch_all_sale();
		$this->data['blogs'] = $this->news_model->fetch_all(3);

        $this->render('homepage_view');
	}

	public function getHighlightByCategory()
	{
		$category = $this->input->get('category');

		// if(!isset($category)){
		// 	$category = '';
		// }

		// $highlights = $this->product_model->get_focus_by_category_id($category, 10);

		$highlights = [
			0 => [
				'code' => 'SP394',
				'title' => 'Nồi hấp tiệt trùng A123',
				'rating' => 4.5,
				'made_in' => 'Trung Quốc',
				'standard' => 'Class B',
				'url' => '#',
				'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
			],
			1 => [
				'code' => 'SP394',
				'title' => 'Nồi hấp tiệt trùng A123',
				'rating' => 4.5,
				'made_in' => 'Trung Quốc',
				'standard' => 'Class B',
				'url' => '#',
				'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
			],
			2 => [
				'code' => 'SP394',
				'title' => 'Nồi hấp tiệt trùng A123',
				'rating' => 4.5,
				'made_in' => 'Trung Quốc',
				'standard' => 'Class B',
				'url' => '#',
				'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
			],
			3 => [
				'code' => 'SP394',
				'title' => 'Nồi hấp tiệt trùng A123',
				'rating' => 4.5,
				'made_in' => 'Trung Quốc',
				'standard' => 'Class B',
				'url' => '#',
				'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
			],
			4 => [
				'code' => 'SP394',
				'title' => 'Nồi hấp tiệt trùng A123',
				'rating' => 4.5,
				'made_in' => 'Trung Quốc',
				'standard' => 'Class B',
				'url' => '#',
				'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
			]
		];

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['highlights' => $highlights])));
	}
}
