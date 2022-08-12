<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Transform_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'transform';

	function __construct(){
		parent::__construct();
	}

	public function count_search($is_active = '', $keyword = ''){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like('name', $keyword);
        $this->db->where('is_deleted', 0);
        if ( !empty($is_active) ) {
            $this->db->where('is_active', $is_active);
        }

        return $result = $this->db->get()->num_rows();
    }

    public function get_all_with_pagination_search($is_active = '', $order = 'desc', $limit = NULL, $start = NULL, $keywords = '') {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->like('name', $keywords);
        $this->db->where('is_deleted', 0);
        if ( !empty($is_active) ) {
            $this->db->where('is_active', $is_active);
        }
        $this->db->limit($limit, $start);
        $this->db->order_by('id', $order);

        return $result = $this->db->get()->result_array();
    }
}