<?php 

class Content extends Admin_Controller{
    private $author_data = array();

	function __construct(){
		parent::__construct();
		$this->load->model('content_model');
		$this->load->helper('common');
        $this->load->helper('file');

        $this->data['controller'] = $this->content_model->table;
		$this->author_data = handle_author_common_data();
	}

    public function index(){
        $this->data['result'] = $this->content_model->get_all_content();
        
        $this->render('admin/content/index');
    }

	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $types = FIXED_CONTENT;
        $existedType = $this->content_model->get_exist_type();
        if (!empty($existedType)) {
            foreach ($existedType as $value) {
                unset($types[$value['type']]);
            }
        }
        $this->data['types'] = $types;

        $this->form_validation->set_rules('type', 'Loại nội dung', 'required');
        $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
        
        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/content/create');
        } else {
        	if ($this->input->post()) {
                $data = array(
                    'type' => $this->input->post('type'),
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content')
                );
                $insert = $this->content_model->insert(array_merge($data, $this->author_data));
                if ($insert) {
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/content', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    $this->render('admin/content/create');
                }
            }
        }
	}

    public function edit($id){
        if($id &&  is_numeric($id) && ($id > 0)){
            $this->load->helper('form');
            $this->data['types'] = FIXED_CONTENT;

            $detail = $this->content_model->get_content_by_id($id);
            if(empty($detail)){
                $this->session->set_flashdata('message_error',MESSAGE_ISSET_ERROR);
                redirect('admin/content', 'refresh');
            }
            $this->data['detail'] = $detail;
            if($this->input->post()){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
                if($this->form_validation->run() == TRUE){
                    $data = array(
                        'title' => $this->input->post('title'),
                        'content' => $this->input->post('content')
                    );
                    $update = $this->content_model->update($id,array_merge($data, $this->author_data));
                    if ($update) {
                        $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                        redirect('admin/content/index', 'refresh');
                    }else{
                        $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                        redirect('admin/content/edit/' . $id);
                    }
                }
            }
        }else{
            $this->session->set_flashdata('message_error',MESSAGE_ID_ERROR);
            redirect('admin/'. $this->data['controller'] .'', 'refresh');
        }
        $this->render('admin/content/edit');
    }
}