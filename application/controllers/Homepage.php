<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');
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

		$this->data['product_categories'] = [
			0 => 'Ghế nha khoa - Máy nén',
			1 => 'Tay khoan nha khoa',
			2 => 'Thiết bị - Phụ tùng',
			3 => 'Laboratory',
			4 => 'Vật tư - Dụng cụ',
		];

        $this->render('homepage_view');
	}

	public function getHighlightByCategory()
	{
		$category = $this->input->get('category');

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
