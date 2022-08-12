<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Product_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'product';

	function __construct(){
		parent::__construct();
	}
    public function get_all_with_pagination_search($is_active = '',$order = 'desc', $limit = NULL, $start = NULL, $keywords = '') {
        $this->db->select($this->table.'.*, product_category.title as category_title, product_category.slug as category_slug');
        $this->db->from($this->table);
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->like($this->table.'.title', $keywords);
        $this->db->where($this->table.'.is_deleted', 0);
        if ( !empty($is_active) ) {
            $this->db->where($this->table.'.is_active', $is_active);
        }
        $this->db->limit($limit, $start);
        $this->db->order_by($this->table.'.id', $order);

        return $result = $this->db->get()->result_array();
    }
    
    public function fetch_all() {
        $this->db->select('product.*, product_category.title as category_title');
        $this->db->from('product');
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->where('product.is_deleted', 0);
        $this->db->where('product.is_active', 1);

        return $result = $this->db->get()->result_array();
    }

    public function get_by_category_id($cate_id = ''){
        $this->db->from('product');
        $this->db->where('is_deleted', 0);
        $this->db->where('category_id', $cate_id);
        return $this->db->get()->result_array();
    }

    public function fetch_by_slug($slug = ''){
        $this->db->select('product.*, product_category.title as category_title, product_category.slug as category_slug');
        $this->db->from('product');
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->where('product.slug', $slug);
        $this->db->where('product.is_deleted', 0);
        $this->db->where('product.is_active', 1);

        return $result = $this->db->get()->row_array();
    }
}