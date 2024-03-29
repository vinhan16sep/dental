<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Partner extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
        $this->load->model('partner_origin_model');
		$this->load->model('partner_model');
		$this->load->helper('common_helper');
        $this->author_data = handle_author_common_data();
	}

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index(){
		$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $this->data['keywords'] = $keywords;
        $total_rows  = $this->partner_model->count_search($keywords);
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/partner/index');
        $per_page = 10;
        $uri_segment = 4;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $result = $this->partner_model->get_all_with_pagination_search('','desc', $per_page, $this->data['page'], $keywords);
        $this->data['result'] = $result;
		$this->render('admin/partner/index');
	}

	public function detail($id){
        $detail = $this->partner_model->get_by_id($id);
        $this->data['detail'] = $detail;
        $this->render('admin/partner/detail');
    }

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $origins = $this->partner_origin_model->get_all();
        $this->data['origins'] = $origins;
        
        $this->form_validation->set_rules('title', 'Tiêu đề partner', 'required');
        $this->form_validation->set_rules('image', 'Hình ảnh', 'callback_check_file');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/partner/create');
        } else {
        	if ($this->input->post()) {
                if(!empty($_FILES['image']['name'])){
                    $this->check_img($_FILES['image']['name'], $_FILES['image']['size']);
                }
                $slug = $this->input->post('slug');
                $unique_slug = $this->partner_model->build_unique_slug($slug);
                if(!file_exists('assets/upload/partner/' . $unique_slug)){
                    mkdir('assets/upload/partner/' . $unique_slug, 0777);
                }
                if ( !empty($_FILES['image']['name']) ) {
                    chmod('assets/upload/partner/' . $unique_slug, 0777);
                    $images = $this->upload_image('image', 'assets/upload/partner/' . $unique_slug, $_FILES['image']['name']);
                }
                $data = array(
                    'image' => $images,
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'body' => $this->input->post('body'),
                    'is_active' => $this->input->post('is_active'),
                );
                $insert = $this->partner_model->insert(array_merge($data, $this->author_data));
                if ($insert) {
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/partner', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    redirect('admin/partner/create');
                }
            }
        }
	}

	/**
	 * [edit description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function edit($id){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $detail = $this->partner_model->get_by_id($id);
        if(empty($detail) || !is_numeric($id)){
            $this->session->set_flashdata('message_error', MESSAGE_ISSET_ERROR);
            redirect('admin/partner');
        }
        $this->data['detail'] = $detail;

        $origins = $this->partner_origin_model->get_all();
        $this->data['origins'] = $origins;

        $this->form_validation->set_rules('title', 'Tiêu đề partner', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/partner/edit');
        }else{
            if ($this->input->post()) {
                if(!empty($_FILES['image']['name'])){
                    $this->check_img($_FILES['image']['name'], $_FILES['image']['size']);
                }

                $slug = $this->input->post('slug');
                $unique_slug = $detail['slug'];
                if ($slug != $unique_slug) {
                    $unique_slug = $this->partner_model->build_unique_slug($slug);
                    if(file_exists('assets/upload/partner/' . $detail['slug'])) {
                        chmod('assets/upload/partner/' . $detail['slug'], 0777);
                        rename('assets/upload/partner/' . $detail['slug'], 'assets/upload/partner/' . $unique_slug);
                    }
                }
                if(!file_exists('assets/upload/partner/' . $unique_slug)){
                    mkdir('assets/upload/partner/' . $unique_slug, 0777);
                }
                if ( !empty($_FILES['image']['name']) ) {
                    chmod('assets/upload/partner/' . $unique_slug, 0777);
                    $images = $this->upload_image('image', 'assets/upload/partner/' . $unique_slug, $_FILES['image']['name']);
                }
                $tag = $this->input->post('tag');
                if ( !empty($tag) && strpos($tag, ',') ) {
                	$tag = explode(',', $tag);
                	$tag = json_encode($tag);
                	
                }else{
                	$tag = json_encode(array($tag));
                }
                $data = array(
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'body' => $this->input->post('body'),
                    'is_active' => $this->input->post('is_active'),
                );
                if ( !empty($_FILES['image']['name']) ) {
                    $data['image'] = $images;
                }
                $update = $this->partner_model->update($id,array_merge($data, $this->author_data));
                if ($update) {
                    $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                    if(isset($images) && $images != $detail['image'] && file_exists('assets/upload/partner/'.$unique_slug.'/'.$detail['image'])){
                        unlink('assets/upload/partner/'.$unique_slug.'/'.$detail['image']);
                    }
                    redirect('admin/partner/index', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                    redirect('admin/partner/edit/' . $id);
                }
            }
        }
	}

    public function deactive(){
        $id = $this->input->get('id');
        $detail = $this->partner_model->get_by_id($id);
        $data = array(
            'is_active' => 0
        );
        $update = $this->partner_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }
    }

    public function active(){
        $id = $this->input->get('id');
        $data = array(
            'is_active' => 1
        );
        $update = $this->partner_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }

    }

    public function remove(){
        $id = $this->input->get('id');
        $detail = $this->partner_model->get_by_id($id);
        $data = array(
            'is_deleted' => 1
        );
        $update = $this->partner_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }

    }
	protected function check_img($filename, $filesize){
        $reponse = array(
            'csrf_hash' => $this->security->get_csrf_hash()
        );
        $map = strripos($filename, '.')+1;
        $fileextension = substr($filename, $map,(strlen($filename)-$map));
        if(!($fileextension == 'jpg' || $fileextension == 'jpeg' || $fileextension == 'png' || $fileextension == 'gif')  || $filesize > 1228800){
            $this->session->set_flashdata('message_error', sprintf(MESSAGE_PHOTOS_ERROR, 1200));
            redirect('admin/partner');
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