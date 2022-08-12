<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Product_category extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
        $this->load->model('product_category_model');
		$this->load->model('product_model');
		$this->load->helper('common_helper');
        $this->author_data = handle_author_common_data();
	}

	public function index(){
		$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $this->data['keywords'] = $keywords;
        $total_rows  = $this->product_category_model->count_search('',$keywords);
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/product_category/index');
        $per_page = 10;
        $uri_segment = 4;
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $config = $this->pagination_config($base_url, $total_rows, $per_page, $uri_segment);
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $result = $this->product_category_model->get_all_with_pagination_search('', 'desc', $per_page, $this->data['page'], $keywords);
        $this->data['result'] = $result;

		$this->render('admin/product_category/index');
	}

	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Tiêu đề', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/product_category/create');
        } else {
        	if ($this->input->post()) {
                if(!empty($_FILES['image']['name'])){
                    $this->check_img($_FILES['image']['name'], $_FILES['image']['size']);
                }
                $slug = $this->input->post('slug');
                $unique_slug = $this->product_category_model->build_unique_slug($slug);
                $data = array(
                    'image' => null,
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'meta_keywords' => $this->input->post('meta_keywords'),
                    'meta_description' => $this->input->post('meta_description'),
                    'description' => $this->input->post('description'),
                    'is_active' => $this->input->post('is_active'),
                );
                $insert = $this->product_category_model->insert(array_merge($data, $this->author_data));
                if ($insert) {
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/product_category', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    redirect('admin/product_category/create');
                }
            }
        }
	}

	public function detail($id){
        $detail = $this->product_category_model->get_by_id($id);
        $this->data['detail'] = $detail;
        $this->render('admin/product_category/detail');
    }

	public function edit($id){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $detail = $this->product_category_model->get_by_id($id);
        if(empty($detail) || !is_numeric($id)){
            $this->session->set_flashdata('message_error', MESSAGE_ISSET_ERROR);
            redirect('admin/product_category');
        }
        $this->data['detail'] = $detail;

        $this->form_validation->set_rules('title', 'Tiêu đề', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/product_category/edit');
        }else{
            if ($this->input->post()) {

                $slug = $this->input->post('slug');
                $unique_slug = $detail['slug'];
                if ($slug != $unique_slug) {
                    $unique_slug = $this->product_category_model->build_unique_slug($slug);
                }
                // Chưa tạo bảng product
                // Cần tạo cho mỗi kích thước ảnh 1 cột để tiện xử lý
                $number_product = $this->product_model->find_row_array(array('category_id' => $id,'is_deleted' => 0,'is_active' => 1));
                if($number_product > 0 && $this->input->post('is_active') == 0){
                    $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR_ACTIVE);
                    redirect('admin/product_category/edit/' . $id);
                }
                
                $data = array(
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'meta_keywords' => $this->input->post('meta_keywords'),
                    'meta_description' => $this->input->post('meta_description'),
                    'description' => $this->input->post('description'),
                    'is_active' => $this->input->post('is_active'),
                );
                $update = $this->product_category_model->update($id,array_merge($data, $this->author_data));
                if ($update) {
                    $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                    if(isset($images) && $images != $detail['image'] && file_exists('assets/upload/product_category/'.$unique_slug.'/'.$detail['image'])){
                        unlink('assets/upload/product_category/'.$unique_slug.'/'.$detail['image']);
                    }
                    redirect('admin/product_category/index', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                    redirect('admin/product_category/edit/' . $id);
                }
            }
        }
	}


  public function active(){
        $id = $this->input->get('id');
        $data = array('is_active' => 1);
        $update = $this->product_category_model->update($id,$data);
        if ($update == 1) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true) ));
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(HTTP_BAD_REQUEST)
            ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST)));
    }

    public function deactive(){
        $id = $this->input->get('id');
        $number_product = $this->product_model->find_row_array(array('category_id' => $id,'is_deleted' => 0,'is_active' => 1));
        if($number_product > 0){
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST, 'message' => 'Bạn không thể tắt danh mục này')));
        }
        $data = array('is_active' => 0);
        $update = $this->product_category_model->update($id,$data);
        if ($update == 1) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true) ));
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(HTTP_BAD_REQUEST)
            ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST,'message' => 'Bạn không thể xóa danh mục này')));
    }
    
    public function remove(){
        $id = $this->input->get('id');
        $number_product = $this->product_model->find_row_array(array('category_id' => $id,'is_deleted' => 0));
        if($number_product > 0){
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST, 'message' => 'Bạn không thể xóa danh mục này')));
        }
        $data = array('is_deleted' => 1);
        $update = $this->product_category_model->update($id, $data);
        if($update == 1){
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST, 'message' => 'Bạn không thể xóa danh mục này')));
    }

	protected function check_img($filename, $filesize){
        $reponse = array(
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        $map = strripos($filename, '.')+1;
        $fileextension = substr($filename, $map,(strlen($filename)-$map));
        if(!($fileextension == 'jpg' || $fileextension == 'jpeg' || $fileextension == 'png' || $fileextension == 'gif')  || $filesize > 1228800){
            $this->session->set_flashdata('message_error', sprintf(MESSAGE_PHOTOS_ERROR, 1200));
            redirect('admin/product_category');
        }
    }

    public function check_file(){
        $this->form_validation->set_message(__FUNCTION__, 'Vui lòng chọn ảnh.');
        if (!empty($_FILES['image']['name'][0])) {
            return true;
        }
        return false;
    }
}