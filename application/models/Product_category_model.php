<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Product_category_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'product_category';

	function __construct(){
		parent::__construct();
	}

	public function get_active() {
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);
        $this->db->order_by('index', 'asc');

        return $result = $this->db->get()->result_array();
    }

	public function get_category_by_id($id) {
		$this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('id', $id);

		return $result = $this->db->get()->result_array();
	}
}