<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class News_category_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'news_category';

	function __construct(){
		parent::__construct();
	}

	public function get_active() {
        $this->db->select('*');
        $this->db->from('news_category');
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);
        $this->db->order_by('id', 'asc');

        return $result = $this->db->get()->result_array();
    }

	public function get_category_by_id($id) {
		$this->db->select('*');
        $this->db->from('news_category');
        $this->db->where('id', $id);

		return $result = $this->db->get()->result_array();
	}
}