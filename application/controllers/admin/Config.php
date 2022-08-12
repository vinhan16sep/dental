<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends Admin_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('config_model');
        $this->load->helper('common_helper');
        $this->data['controller'] = $this->config_model->table;
        $this->author_data = handle_author_common_data();
    }
    public function edit($key = 'doctor'){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $detail = $this->config_model->get_by_key($key);
        if($detail){
            $this->data['detail'] = json_decode($detail['value'],true);
            if($this->input->post()){
                $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
                $this->form_validation->set_rules('description', 'Mô tả', 'required');
                if($this->form_validation->run() === true){
                    if(!empty($_FILES['image']['name'])){
                        $this->check_img($_FILES['image']['name'], $_FILES['image']['size']);
                        $image = $this->upload_image('image', 'assets/upload/'.$this->data['controller'], $_FILES['image']['name']);
                    }
                    $data = array(
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                    );
                    if(isset($image)){
                        $data['image'] = $image;
                    }else{
                        $data['image'] = $this->data['detail']['image'];
                    }
                    $update = $this->config_model->update($detail['id'],array('value' => json_encode(array_merge($data, $this->author_data))));
                    if ($update) {
                        $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                        if(isset($image) && file_exists('assets/upload/config/'.$this->data['detail']['image'])){
                            unlink('assets/upload/config/'.$this->data['detail']['image']);
                        }
                        redirect('admin/config/detail', 'refresh');
                    }else{
                        $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                        redirect('admin/config/edit/' . $key);
                    }
                }
            }
            $this->render('admin/config/edit');
        }else{
            if($this->input->post()){
                $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
                $this->form_validation->set_rules('description', 'Mô tả', 'required');
                if($this->form_validation->run() === true){
                    if(!empty($_FILES['image']['name'])){
                        $this->check_img($_FILES['image']['name'], $_FILES['image']['size']);
                        $image = $this->upload_image('image', 'assets/upload/'.$this->data['controller'], $_FILES['image']['name']);
                    }
                    $data = array(
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                    );
                    if(isset($image)){
                        $data['image'] = $image;
                    }else{
                        $data['image'] = $this->data['detail']['image'];
                    }
                    $insert = $this->config_model->insert(array('my_key' => 'doctor', 'value' => json_encode(array_merge($data, $this->author_data))));
                    if ($insert) {
                        $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                        redirect('admin/config/detail', 'refresh');
                    }else{
                        $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                        redirect('admin/config/edit/' . $key);
                    }
                }
            }
            $this->render('admin/config/edit');
        }

    }
    public function detail($key = 'doctor'){
        $detail = $this->config_model->get_by_key($key);
        if($detail){
            $this->data['detail'] = json_decode($detail['value'],true);
            $this->data['detail']['id'] = $detail['id'];
            $this->render('admin/config/detail');
        }else{
            redirect('admin/config/edit/' . $key);
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
            redirect('admin/config');
        }
    }
}
