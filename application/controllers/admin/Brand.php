<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Brand extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
        $this->load->model('brand_model');
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
        $total_rows  = $this->brand_model->count_search('',$keywords);
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/brand/index');
        $per_page = 10;
        $uri_segment = 4;
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $config = $this->pagination_config($base_url, $total_rows, $per_page, $uri_segment);
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $result = $this->brand_model->get_all_with_pagination_search('', 'desc', $per_page, $this->data['page'], $keywords);
        $this->data['result'] = $result;

		$this->render('admin/brand/index');
	}

	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Tiêu đề', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/brand/create');
        } else {
        	if ($this->input->post()) {
                $slug = $this->input->post('slug');
                $unique_slug = $this->brand_model->build_unique_slug($slug);
                $data = array(
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'is_active' => $this->input->post('is_active'),
                );
                $insert = $this->brand_model->insert(array_merge($data, $this->author_data));
                if ($insert) {
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/brand', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    redirect('admin/brand/create');
                }
            }
        }
	}

	public function detail($id){
        $detail = $this->brand_model->get_by_id($id);
        $this->data['detail'] = $detail;
        $this->render('admin/brand/detail');
    }

	public function edit($id){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $detail = $this->brand_model->get_by_id($id);
        if(empty($detail) || !is_numeric($id)){
            $this->session->set_flashdata('message_error', MESSAGE_ISSET_ERROR);
            redirect('admin/brand');
        }
        $this->data['detail'] = $detail;

        $this->form_validation->set_rules('title', 'Tiêu đề', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/brand/edit');
        }else{
            if ($this->input->post()) {

                $slug = $this->input->post('slug');
                $unique_slug = $detail['slug'];
                if ($slug != $unique_slug) {
                    $unique_slug = $this->brand_model->build_unique_slug($slug);
                }
                $number_product = $this->product_model->find_row_array(array('category_id' => $id,'is_deleted' => 0,'is_active' => 1));
                if($number_product > 0 && $this->input->post('is_active') == 0){
                    $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR_ACTIVE);
                    redirect('admin/brand/edit/' . $id);
                }
                
                $data = array(
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'is_active' => $this->input->post('is_active'),
                );
                unset($this->author_data['created_at']);
                unset($this->author_data['created_by']);
                $update = $this->brand_model->update($id,array_merge($data, $this->author_data));
                if ($update) {
                    $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                    if(isset($images) && $images != $detail['image'] && file_exists('assets/upload/brand/'.$unique_slug.'/'.$detail['image'])){
                        unlink('assets/upload/brand/'.$unique_slug.'/'.$detail['image']);
                    }
                    redirect('admin/brand/index', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                    redirect('admin/brand/edit/' . $id);
                }
            }
        }
	}


  public function active(){
        $id = $this->input->get('id');
        $data = array('is_active' => 1);
        $update = $this->brand_model->update($id,$data);
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
        $number_product = $this->product_model->find_row_array(array('brand_id' => $id,'is_deleted' => 0,'is_active' => 1));
        if($number_product > 0){
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST, 'message' => 'Bạn không thể tắt xuất xứ này')));
        }
        $data = array('is_active' => 0);
        $update = $this->brand_model->update($id,$data);
        if ($update == 1) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true) ));
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(HTTP_BAD_REQUEST)
            ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST,'message' => 'Bạn không thể xóa xuất xứ này')));
    }
    
    public function remove(){
        $id = $this->input->get('id');
        $number_product = $this->product_model->find_row_array(array('brand_id' => $id,'is_deleted' => 0));
        if($number_product > 0){
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST, 'message' => 'Bạn không thể xóa xuất xứ này')));
        }
        $data = array('is_deleted' => 1);
        $update = $this->brand_model->update($id, $data);
        if($update == 1){
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST, 'message' => 'Bạn không thể xóa xuất xứ này')));
    }

	protected function check_img($filename, $filesize){
        $reponse = array(
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        $map = strripos($filename, '.')+1;
        $fileextension = substr($filename, $map,(strlen($filename)-$map));
        if(!($fileextension == 'jpg' || $fileextension == 'jpeg' || $fileextension == 'png' || $fileextension == 'gif')  || $filesize > 1228800){
            $this->session->set_flashdata('message_error', sprintf(MESSAGE_PHOTOS_ERROR, 1200));
            redirect('admin/brand');
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