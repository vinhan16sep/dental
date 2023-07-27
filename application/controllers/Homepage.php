<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Public_Controller {
	public function __construct(){
		parent::__construct();

        $this->load->library('session');

		$this->load->model('product_model');
		$this->load->model('news_model');
		$this->load->model('banner_model');
		$this->load->model('partner_model');
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

		$this->data['banner'] = $this->banner_model->fetch_all(3);
		$this->data['blogs'] = $this->news_model->fetch_all(3);

		$this->data['partners'] = $this->partner_model->fetch_all(10);

        $this->render('homepage_view');
	}

	public function getHighlightByCategory()
	{
		$category = $this->input->get('category');

		$highlights = $this->product_model->get_focus_by_category_id($category);

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['highlights' => $highlights])));
	}

	public function getHighlightDetail()
	{
		$id = $this->input->get('id');

		$detail = [
			'id' => 1,
			'code' => 'SP394',
			'title' => 'Nồi hấp tiệt trùng A123',
			'rating' => 4.5,
			'made_in' => 'Trung Quốc',
			'standard' => 'Class B',
			'warranty' => '12',
			'brand' => 'Brand',
			'url' => '#',
			'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
			'description' => 'In ut lorem enim. Morbi suscipit nisi vel nisi sollicitudin, nec scelerisque urna congue. Aliquam lobortis turpis non magna pharetra ultrices. Integer ut iaculis nisl, vitae aliquet sapien. Sed aliquam dui dictum lacus porttitor fringilla. Fusce sodales est vitae sem aliquet gravida. Mauris ipsum velit, dignissim vel malesuada vitae, porttitor quis quam. Sed et urna massa. Nullam sodales, diam ut bibendum faucibus, ipsum lorem fringilla ipsum, eget malesuada nisi orci ut erat.',
			'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis justo metus, in accumsan odio dictum et. Duis venenatis massa sed molestie laoreet. Mauris efficitur ac nibh vel imperdiet. Pellentesque nec libero est. Nulla in accumsan libero. Quisque elementum eget felis eget facilisis. Fusce luctus nisl felis, cursus ornare nibh condimentum et. Phasellus ut justo nisl. Suspendisse pharetra vulputate auctor. Fusce vehicula leo eu posuere vehicula. Nunc blandit, nisl sed dictum condimentum, nunc felis porta nulla, eu scelerisque augue dui vel ligula. Phasellus ac tristique mauris, eget suscipit sapien. Maecenas eget dignissim turpis, vel sagittis mauris. Ut vitae mattis odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi nunc, semper ac risus sed, aliquet vestibulum quam.</p><p>Vestibulum molestie tortor sit amet faucibus elementum. Nullam dapibus eu ex sit amet euismod. Mauris ac urna malesuada, varius arcu non, semper purus. Duis vitae ante semper, sodales magna in, ornare elit. In sodales dolor id sollicitudin molestie. Mauris sed pellentesque nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><img src="https://images.unsplash.com/photo-1598256989800-fe5f95da9787?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt=""><p>Pellentesque at tincidunt diam, quis hendrerit nibh. Mauris sollicitudin, leo ac sollicitudin tristique, enim nibh eleifend ante, sed tincidunt lectus dui sit amet enim. Mauris fringilla aliquam nibh, in fermentum enim venenatis vel. Aenean imperdiet arcu in justo interdum, in sodales purus consequat. Praesent ac lorem eget magna feugiat pulvinar. Cras nec condimentum ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur sagittis neque id lacinia sodales. Suspendisse ut mauris tellus. Sed non nunc non enim congue aliquam nec sit amet mi. Mauris at quam turpis. Donec tincidunt sit amet elit id tristique. Maecenas mi sem, aliquam non urna sed, feugiat vestibulum diam. Fusce posuere, tellus quis venenatis accumsan, ante enim consequat ligula, sit amet tempus sem eros commodo risus. Duis nisl erat, lacinia accumsan blandit eget, dapibus et ligula. Ut lorem nibh, pellentesque id molestie eu, viverra eu nibh.</p>'
		];

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['detail' => $detail])));
	}
}
