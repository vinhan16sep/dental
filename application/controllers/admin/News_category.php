<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class News_category extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
        $this->load->model('news_category_model');
		$this->load->model('news_model');
		$this->load->helper('common_helper');
        $this->author_data = handle_author_common_data();
	}

	public function index(){
		$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $this->data['keywords'] = $keywords;
        $total_rows  = $this->news_category_model->count_search('',$keywords);
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/news_category/index');
        $per_page = 10;
        $uri_segment = 4;
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $config = $this->pagination_config($base_url, $total_rows, $per_page, $uri_segment);
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $result = $this->news_category_model->get_all_with_pagination_search('', 'desc', $per_page, $this->data['page'], $keywords);
        $this->data['result'] = $result;

		$this->render('admin/news_category/index');
	}

	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Tiêu đề', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/news_category/create');
        } else {
        	if ($this->input->post()) {
                if(!empty($_FILES['image']['name'])){
                    $this->check_img($_FILES['image']['name'], $_FILES['image']['size']);
                }
                $slug = $this->input->post('slug');
                $unique_slug = $this->news_category_model->build_unique_slug($slug);

                $data = array(
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'meta_keywords' => $this->input->post('meta_keywords'),
                    'meta_description' => $this->input->post('meta_description'),
                    'is_active' => $this->input->post('is_active'),
                );
                $insert = $this->news_category_model->insert(array_merge($data, $this->author_data));
                if ($insert) {
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/news_category', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    redirect('admin/news_category/create');
                }
            }
        }
	}

	public function detail($id){
        $detail = $this->news_category_model->get_by_id($id);
        $this->data['detail'] = $detail;
        $this->render('admin/news_category/detail');
    }

	public function edit($id){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $detail = $this->news_category_model->get_by_id($id);
        if(empty($detail) || !is_numeric($id)){
            $this->session->set_flashdata('message_error', MESSAGE_ISSET_ERROR);
            redirect('admin/news_category');
        }
        $this->data['detail'] = $detail;

        $this->form_validation->set_rules('title', 'Tiêu đề', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/news_category/edit');
        }else{
            if ($this->input->post()) {
                $slug = $this->input->post('slug');
                $unique_slug = $detail['slug'];
                if ($slug != $unique_slug) {
                    $unique_slug = $this->news_category_model->build_unique_slug($slug);
                }
                
                $data = array(
                    'slug' => $unique_slug,
                    'title' => $this->input->post('title'),
                    'meta_keywords' => $this->input->post('meta_keywords'),
                    'meta_description' => $this->input->post('meta_description'),
                    'is_active' => $this->input->post('is_active'),
                );
                
                unset($this->author_data['created_at']);
                unset($this->author_data['created_by']);
                $update = $this->news_category_model->update($id,array_merge($data, $this->author_data));
                if ($update) {
                    $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                    
                    redirect('admin/news_category/index', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                    redirect('admin/news_category/edit/' . $id);
                }
            }
        }
	}
}