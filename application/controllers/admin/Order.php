<?php 

/**
* 
*/
class Order extends Admin_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('order_model');
        $this->load->helper('common');

        $this->data['controller'] = $this->order_model->table;
    }

    public function index(){
        $this->data['keyword'] = '';
        if($this->input->get('search')){
            $this->data['keyword'] = $this->input->get('search');
        }
        $this->load->library('pagination');
        $per_page = 10;
        $total_rows  = $this->order_model->count_search('',$this->data['keyword']);
        $config = $this->pagination_config(base_url('admin/'.$this->data['controller'].'/index'), $total_rows, $per_page, 4);
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['result'] = $this->order_model->get_all_with_pagination_search('','desc', $per_page, $this->data['page'], $this->data['keyword']);
        $this->render('admin/order/index');
    }
    public function remove(){
        $id = $this->input->get('id');
        $detail = $this->order_model->get_by_id($id);
        $data = array(
            'is_deleted' => 1
        );
        $update = $this->order_model->update($id, $data);
        if ($update) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'result' => true)));
        }

    }
}