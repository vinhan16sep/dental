<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Qna_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'qna';

	function __construct(){
		parent::__construct();
	}
	
    public function count_search($is_active = '', $keyword = ''){
        $this->db->select('*');
        $this->db->from('qna');
		$this->db->like('question', $keyword);
        $this->db->where('is_deleted', 0);
        if ( !empty($is_active) ) {
            $this->db->where('is_active', $is_active);
        }

        return $result = $this->db->get()->num_rows();
    }
	
    public function get_all_with_pagination_search($is_active = '', $order = 'desc', $limit = NULL, $start = NULL, $keyword = '') {
        $this->db->select('*');
        $this->db->from('qna');
		$this->db->like('question', $keyword);
        $this->db->where('is_deleted', 0);
        if ( !empty($is_active) ) {
            $this->db->where('is_active', $is_active);
        }
        $this->db->limit($limit, $start);
        $this->db->order_by('id', $order);

        return $result = $this->db->get()->result_array();
    }

	public function get_active() {
        $this->db->select('*');
        $this->db->from('qna');
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);
        $this->db->order_by('id', 'asc');

        return $result = $this->db->get()->result_array();
    }

    public function get_qna_by_id($id) {
        $this->db->select('*');
        $this->db->from('qna');
        $this->db->where('id', $id);

        return $result = $this->db->get()->result_array();
    }
}