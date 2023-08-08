<?php 

/**
* 
*/
class Qna extends Admin_Controller{
    private $author_data = array();

	function __construct(){
		parent::__construct();
		$this->load->model('qna_model');
		$this->load->helper('common');
        $this->load->helper('file');

        $this->data['controller'] = $this->qna_model->table;
		$this->author_data = handle_author_common_data();
	}

    public function index(){
        $this->load->library('pagination');
        $per_page = 10;
        $total_rows  = $this->qna_model->count_search('', '');
        $config = $this->pagination_config(base_url('admin/'.$this->data['controller'].'/index'), $total_rows, $per_page, 4);
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['result'] = $this->qna_model->get_all_with_pagination_search('', 'desc', $per_page, $this->data['page'], '');
        
        $this->render('admin/qna/index');
    }

	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('answer', 'Answer', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/qna/create');
        } else {
        	if ($this->input->post()) {
                $data = array(
                    'question' => $this->input->post('question'),
                    'answer' => $this->input->post('answer'),
                    'is_active' => $this->input->post('is_active'),
                );
                $insert = $this->qna_model->insert(array_merge($data, $this->author_data));
                if ($insert) {
                    $this->session->set_flashdata('message_success', MESSAGE_CREATE_SUCCESS);
                    redirect('admin/qna', 'refresh');
                }else{
                    $this->session->set_flashdata('message_error', MESSAGE_CREATE_ERROR);
                    $this->render('admin/qna/create');
                }
            }
        }
	}

    public function edit($id){
        if($id &&  is_numeric($id) && ($id > 0)){
            $this->load->helper('form');
            $detail = $this->qna_model->get_by_id($id);
            if(empty($detail)){
                $this->session->set_flashdata('message_error',MESSAGE_ISSET_ERROR);
                redirect('admin/qna', 'refresh');
            }
            $this->data['detail'] = $detail;
            if($this->input->post()){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('question', 'Question', 'required');
                $this->form_validation->set_rules('answer', 'Answer', 'required');
                if($this->form_validation->run() == TRUE){
                    $data = array(
                        'question' => $this->input->post('question'),
                        'answer' => $this->input->post('answer'),
                        'is_active' => $this->input->post('is_active'),
                    );
                    $update = $this->qna_model->update($id,array_merge($data, $this->author_data));
                    if ($update) {
                        $this->session->set_flashdata('message_success', MESSAGE_EDIT_SUCCESS);
                        if(isset($image) && $image != $detail['image'] && file_exists('assets/upload/qna/'.$detail['image'])){
                            unlink('assets/upload/qna/'.$detail['image']);
                        }
                        redirect('admin/qna/index', 'refresh');
                    }else{
                        $this->session->set_flashdata('message_error', MESSAGE_EDIT_ERROR);
                        redirect('admin/qna/edit/' . $id);
                    }
                }
            }
        }else{
            $this->session->set_flashdata('message_error',MESSAGE_ID_ERROR);
            redirect('admin/'. $this->data['controller'] .'', 'refresh');
        }
        $this->render('admin/qna/edit');
    }

    public function deactive(){
        $id = $this->input->get('id');
        $detail = $this->qna_model->get_by_id($id);
        $data = array(
            'is_active' => 0
        );
        $update = $this->qna_model->update($id, $data);
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
        $update = $this->qna_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }

    }

    public function remove(){
        $id = $this->input->get('id');
        $detail = $this->qna_model->get_by_id($id);
        $data = array(
            'is_deleted' => 1
        );
        $update = $this->qna_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }

    }
}