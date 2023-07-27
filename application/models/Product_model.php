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
    
    public function fetch_all($limit = false) {
        $this->db->select('product.*, product_category.title as category_title');
        $this->db->from('product');
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->where('product.is_deleted', 0);
        $this->db->where('product.is_active', 1);
        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        $this->db->order_by("product.id", "desc");

        return $result = $this->db->get()->result_array();
    }
    
    public function fetch_all_focus($limit = false) {
        $this->db->select(
            'product.*, 
            product_category.title as category_title,
            origin.title as origin,
            brand.title as brand'
        );
        $this->db->from('product');
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->join('origin','origin.id = product.origin_id');
        $this->db->join('brand','brand.id = product.brand_id');
        $this->db->where('product.is_deleted', 0);
        $this->db->where('product.is_active', 1);
        $this->db->where('product.is_focus', 1);

        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        $this->db->order_by("product.id", "desc");

        return $result = $this->db->get()->result_array();
    }
    
    public function fetch_all_sale() {
        $this->db->select(
            'product.*, 
            product_category.title as category_title,
            origin.title as origin,
            brand.title as brand'
        );
        $this->db->from('product');
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->join('origin','origin.id = product.origin_id');
        $this->db->join('brand','brand.id = product.brand_id');
        $this->db->where('product.is_deleted', 0);
        $this->db->where('product.is_active', 1);
        $this->db->where('product.is_sale', 1);

        return $result = $this->db->get()->result_array();
    }

    public function get_by_category_id($cate_id = '', $limit = false){
        $this->db->from('product');
        $this->db->where('is_deleted', 0);
        $this->db->where('category_id', $cate_id);
        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        return $this->db->get()->result_array();
    }

    public function get_by_brand_id($brand_id = '', $limit = false){
        $this->db->select(
            'product.*, 
            product_category.title as category_title,
            origin.title as origin,
            brand.title as brand'
        );

        $this->db->from('product');
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->join('origin','origin.id = product.origin_id');
        $this->db->join('brand','brand.id = product.brand_id');
        $this->db->where('product.is_deleted', 0);
        $this->db->where('product.is_active', 1);
        $this->db->where('product.brand_id', $brand_id);
        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        return $this->db->get()->result_array();
    }

    public function get_by_origin_id($origin_id = '', $limit = false){
        $this->db->select(
            'product.*, 
            product_category.title as category_title,
            origin.title as origin,
            brand.title as brand'
        );

        $this->db->from('product');
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->join('origin','origin.id = product.origin_id');
        $this->db->join('brand','brand.id = product.brand_id');
        $this->db->where('product.is_deleted', 0);
        $this->db->where('product.is_active', 1);
        $this->db->where('product.origin_id', $origin_id);
        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        return $this->db->get()->result_array();
    }

    public function get_focus_by_category_id($cate_id = '', $limit = false){
        $this->db->from('product');
        $this->db->where('is_deleted', 0);
        if($cate_id != ''){
            $this->db->where('category_id', $cate_id);
        }
        $this->db->where('is_focus', 1);

        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        $this->db->order_by("product.id", "desc");

        return $this->db->get()->result_array();
    }

    public function fetch_by_slug($slug = ''){
        $this->db->select('product.*, product_category.title as category_title, product_category.slug as category_slug');
        $this->db->from('product');
        $this->db->join('product_category','product.category_id = product_category.id');
        $this->db->where('product.slug', $slug);
        $this->db->where('product.is_deleted', 0);
        $this->db->where('product.is_active', 1);

        return $this->db->get()->result_array();
    }
}