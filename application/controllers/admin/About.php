<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class About extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('about_model');
		$this->load->helper('common_helper');
        $this->author_data = handle_author_common_data();
	}

    public function vision(){
        $vision = $this->about_model->get_by_type('VISION');
        $this->data['detail'] = $vision;
        $this->render('admin/about/vision');
    }

    public function vision_edit(){
        $this->data['detail'] = $this->about_model->get_by_type('VISION');
        $this->load->helper('form');
        if($this->input->post()){
            $data = array(
                'body' => $this->input->post('body')
            );
            $update = $this->about_model->update_by_type('VISION',array_merge($data, $this->author_data));
            if ($update) {
                $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                redirect('admin/about/vision', 'refresh');
            }else{
                $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                redirect('admin/about/vision_edit');
            }
        }
        $this->render('admin/about/vision_edit');
    }

    public function duty(){
        $vision = $this->about_model->get_by_type('DUTY');
        $this->data['detail'] = $vision;
        $this->render('admin/about/duty');
    }

    public function duty_edit(){
        $this->data['detail'] = $this->about_model->get_by_type('DUTY');
        $this->load->helper('form');
        if($this->input->post()){
            $data = array(
                'body' => $this->input->post('body')
            );
            $update = $this->about_model->update_by_type('DUTY',array_merge($data, $this->author_data));
            if ($update) {
                $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                redirect('admin/about/duty', 'refresh');
            }else{
                $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                redirect('admin/about/duty_edit');
            }
        }
        $this->render('admin/about/duty_edit');
    }

    public function value(){
        $vision = $this->about_model->get_by_type('VALUE');
        $this->data['detail'] = $vision;
        $this->render('admin/about/value');
    }

    public function value_edit(){
        $this->data['detail'] = $this->about_model->get_by_type('VALUE');
        $this->load->helper('form');
        if($this->input->post()){
            $data = array(
                'body' => $this->input->post('body')
            );
            $update = $this->about_model->update_by_type('VALUE',array_merge($data, $this->author_data));
            if ($update) {
                $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                redirect('admin/about/value', 'refresh');
            }else{
                $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                redirect('admin/about/value_edit');
            }
        }
        $this->render('admin/about/value_edit');
    }
}