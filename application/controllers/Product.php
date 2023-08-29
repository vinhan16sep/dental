<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Public_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('product_model');
		$this->load->model('product_category_model');
		$this->load->model('origin_model');
		$this->load->model('brand_model');
		$this->load->model('order_model');

		$this->load->helper('common_helper');
		$this->load->library('email');
        $this->author_data = handle_author_guest_common_data();

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
		$this->data['focus_products'] = $this->product_model->fetch_all_focus(10);

		$brandIds = [];
		foreach ($this->data['brands'] as $item) {
			$brandIds[$item['id']] = $item['title'];
		}

		$brandOrigins = [];
		foreach ($this->data['origins'] as $item) {
			$brandOrigins[$item['id']] = $item['title'];
		}

		$this->data['s'] = $this->input->get('s', true);

		$this->data['brandIds'] = $brandIds;
		$this->data['brandOrigins'] = $brandOrigins;

        $this->render('product_view');
	}

	public function category($slug = '')
	{
		if($slug == ''){
			$this->data['the_view_title'] = 'Product Categories';
			$this->data['the_view_css'] = [
				'assets/scss/pages/css/min/product_category.min.css'
			];
			$this->data['the_view_js'] = [
				'assets/js/product/function.min.js'
			];
			$this->render('product_category_view');
		} else {
			$this->data['product_selected_category'] = $this->product_category_model->get_by_slug($slug);

			$this->data['product_categories'] = $this->product_category_model->get_active();
			$this->data['origins'] = $this->origin_model->get_active();
			$this->data['brands'] = $this->brand_model->get_active();
			$this->data['products'] = $this->product_model->get_by_category_id($this->data['product_selected_category']['id']);
			$this->data['focus_products'] = $this->product_model->get_focus_by_category_id($this->data['product_selected_category']['id'], 10);

			$brandIds = [];
			foreach ($this->data['brands'] as $item) {
				$brandIds[$item['id']] = $item['title'];
			}

			$brandOrigins = [];
			foreach ($this->data['origins'] as $item) {
				$brandOrigins[$item['id']] = $item['title'];
			}

			$this->data['brandIds'] = $brandIds;
			$this->data['brandOrigins'] = $brandOrigins;

			$this->data['the_view_title'] = $this->data['product_selected_category']['title'];
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

			$this->render('product_view');
		}
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

		$this->data['origins'] = $this->origin_model->get_active();
		$this->data['brands'] = $this->brand_model->get_active();

    	$detail = $this->product_model->get_by_slug($slug);

		$brandIds = [];
		foreach ($this->data['brands'] as $item) {
			$brandIds[$item['id']] = $item['title'];
		}

		$brandOrigins = [];
		foreach ($this->data['origins'] as $item) {
			$brandOrigins[$item['id']] = $item['title'];
		}

		$this->data['brandIds'] = $brandIds;
		$this->data['brandOrigins'] = $brandOrigins;
		
		$this->data['product_categories'] = $this->product_category_model->get_active();
		$this->data['product_detail_category'] = $this->product_category_model->get_category_by_id($detail['category_id']);
		$this->data['product_category_label'] = $this->data['product_detail_category'][0]['title'];

		$this->data['related_products'] = $this->product_model->get_by_category_id($detail['category_id'], 5);
		
        if (!empty($detail) ) {
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

	public function getProductBySale()
	{
		$products = $this->product_model->fetch_all_sale();

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['products' => $products])));
	}

	public function getProductByOrigin()
	{
		$products = $this->product_model->fetch_all_focus();

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['products' => $products])));
	}

	public function getProductByBrandId($id)
	{
		$products = $this->product_model->get_by_brand_id($id);

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['products' => $products])));
	}

	public function getProductByOriginId($id)
	{
		$products = $this->product_model->get_by_origin_id($id);

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['products' => $products])));
	}

	public function getProducts()
	{
		$limit = $this->input->get('limit');
		$start = $this->input->get('start');
		$keyword = $this->input->get('keyword');
		$categoryId = $this->input->get('categoryId');
		$originId = $this->input->get('originId');
		$brandId = $this->input->get('brandId');
		$isFocus = $this->input->get('isFocus');
		$isSale = $this->input->get('isSale');

		$products = $this->product_model->get_all_with_pagination_search_edit('', 'desc', $limit, $start, $keyword, $categoryId, $originId, $brandId, $isFocus, $isSale);
		$total  = $this->product_model->count_search('', 'desc', $limit, $start, $keyword, $categoryId, $originId, $brandId, $isFocus, $isSale);

		return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array(['products' => $products, 'total' => $total])));
	}

	public function sendOrder()
	{
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Name', 'Họ và tên', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('product_detail_view');
        } else {
        	if ($this->input->post()) {
                $name = $this->input->post('Name');
				$phone = $this->input->post('PhoneNumber');
				$product = $this->input->post('Product');
				$amount = $this->input->post('Amount');
				$slug = $this->input->post('Slug');

                $data = array(
                    'name' => $name,
					'phone' => $phone,
					'product' => $product,
					'amount' => $amount,
                );
                
				$insert = $this->order_model->insert(array_merge($data, $this->author_data));
				$sendMail = $this->send_mail($data);

                if ($insert && $sendMail) {
					$this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
					redirect('/product/detail/' . $slug, 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
					redirect('/product/detail/' . $slug, 'refresh');
                }
            }
        }
	}

	public function send_mail($data) {
		$this->email->from('hotro.minhdental@gmail.com', 'Mail');
		$this->email->to('contact@minhdental.com');
		$this->email->subject('Message from web');
		$this->email->message($this->email_template($data));

		if ($this->email->send()) {
			return true;
		} else {
			return false;
		}
    }

    public function email_template($data){
        $message = '<html><body>';
        $message .= '<p>Chào Admin, bạn có 1 liện hệ mới từ người dùng trên website</p>';
        $message .= '<p>Thông tin như sau:</p>';
        $message .= '<p>Họ tên: ' . $data['name'] . '</p>';
        $message .= '<p>Số điện thoại: ' . $data['phone'] . '</p>';
		$message .= '<p>Sản phẩm quan: ' . $data['product'] . '</p>';
        $message .= '<p>Số lượng: ' . $data['amount'] . '</p>';
        $message .= "</body></html>";

        return $message;
    }
}
