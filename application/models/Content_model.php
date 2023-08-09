<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Content_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'content';

	function __construct(){
		parent::__construct();
	}
	
    public function get_all_content() {
        $this->db->select('*');
        $this->db->from($this->table);

        return $result = $this->db->get()->result_array();
    }

    public function get_content_by_id($id=''){
        $this->db->from($this->table);
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function get_exist_type(){
        $this->db->select('type');
        $this->db->from($this->table);
        return $result = $this->db->get()->result_array();
    }
}