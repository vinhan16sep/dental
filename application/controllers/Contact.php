<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('product_category_model');
		$this->load->model('message_model');

        $this->load->library('session');

		$this->load->helper('common_helper');
        $this->author_data = handle_author_guest_common_data();
	}

    public function index()
	{
		$this->data['the_view_title'] = 'Contact us';
		$this->data['the_view_css'] = [
			'assets/scss/pages/css/min/contact.min.css'
		];
		$this->data['the_view_js'] = [
			'assets/js/contact/function.min.js'
		];

		$this->data['product_categories'] = $this->product_category_model->get_active();

        $this->render('contact_view');
	}

	public function sendMessage()
	{
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Name', 'Họ và tên', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('contact_view');
        } else {
        	if ($this->input->post()) {
                $name = $this->input->post('Name');
				$email = $this->input->post('Email');
				$phone = $this->input->post('PhoneNumber');
				$position = $this->input->post('Position');
				$company = $this->input->post('Company');
				$title = $this->input->post('Title');
				$titleType = $this->input->post('TitleType');
				$message = $this->input->post('Message');

                $data = array(
                    'name' => $name,
					'email' => $email,
					'phone' => $phone,
					'position' => $position,
					'company' => $company,
					'title' => $title,
					'type' => $titleType,
					'content' => $message,

                );
                
				$insert = $this->message_model->insert(array_merge($data, $this->author_data));

                if ($insert) {
					$this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
					redirect('contact', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
					redirect('contact', 'refresh');
                }
            }
        }
	}
}
