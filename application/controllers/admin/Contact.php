<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('contact_model');
        $this->load->helper('common_helper');
        $this->author_data = handle_author_common_data();
    }
    public function create(){
        $this->load->helper('form');
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            if($this->form_validation->run() == TRUE){
                $data = array(
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'google_map' => $this->input->post('google_map'),
                    'email' => $this->input->post('email'),
                    'fax' => $this->input->post('fax'),
                    'facebook' => $this->input->post('facebook'),
                    'instagram' => $this->input->post('instagram'),
                    'linkedin' => $this->input->post('linkedin')
                );
                $insert = $this->contact_model->insert(array_merge($data, $this->author_data));
                if ($insert) {
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/doctor', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    redirect('admin/doctor/create');
                }
            }
        }
        $this->render('admin/contact/create');
    }
    public function edit($id = 1){
        $this->data['detail'] = $this->contact_model->get_by_id($id);
        $this->load->helper('form');
        $this->load->library('form_validation');
        if($this->input->post()){
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            if($this->form_validation->run() === true){
                $data = array(
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'google_map' => $this->input->post('google_map'),
                    'email' => $this->input->post('email'),
                    'fax' => $this->input->post('fax'),
                    'facebook' => $this->input->post('facebook'),
                    'instagram' => $this->input->post('instagram'),
                    'linkedin' => $this->input->post('linkedin')
                );
                $update = $this->contact_model->update($id,array_merge($data, $this->author_data));
                if ($update) {
                    $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                    redirect('admin/contact/detail', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                    redirect('admin/contact/edit/' . $id);
                }
            }
        }
        $this->render('admin/contact/edit');
    }
    public function detail($id = 1){
        $detail = $this->contact_model->get_by_id($id);
        $this->data['detail'] = $detail;
        $this->render('admin/contact/detail');
    }
}
