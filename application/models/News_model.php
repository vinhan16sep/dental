<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class News_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'news';

	function __construct(){
		parent::__construct();
	}

	public function fetch_all($limit = false) {
        $this->db->from('news');
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);

        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        $this->db->order_by("id", "desc");

        return $this->db->get()->result_array();
	}

	public function fetch_relate($ignore_id, $limit = false) {
        $this->db->from('news');
        $this->db->where('id !=', $ignore_id);
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);

        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        $this->db->order_by("id", "desc");

        return $this->db->get()->result_array();
	}

    public function get_by_category_id($category_id='', $limit=false)
    {
        $this->db->select(
            'news.*'
        );

        $this->db->from('news');
        $this->db->where('news.is_deleted', 0);
        $this->db->where('news.is_active', 1);
        $this->db->where('news.category_id', $category_id);
        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        return $this->db->get()->result_array();
    }

    public function get_all_with_pagination_search_edit($is_active = '',$order = 'desc', $limit = NULL, $start = NULL, $keywords = '', $categoryId = NULL) {
        $this->db->select($this->table.'.*, news_category.title as news_category_title');
        $this->db->from($this->table);
        $this->db->join('news_category','news.category_id = news_category.id');
        $this->db->like($this->table.'.title', $keywords);
        $this->db->where($this->table.'.is_deleted', 0);

        if ($categoryId !== NULL) {
            $this->db->where($this->table.'.category_id', $categoryId);
        }

        if ( !empty($is_active) ) {
            $this->db->where($this->table.'.is_active', $is_active);
        }
        $this->db->limit($limit, $start);
        $this->db->order_by($this->table.'.id', $order);

        return $result = $this->db->get()->result_array();
    }

    public function count_search($is_active = '',$order = 'desc', $limit = NULL, $start = NULL, $keywords = '', $categoryId = NULL){
        $this->db->select($this->table.'.*, news_category.title as news_category_title');
        $this->db->from($this->table);
        $this->db->join('news_category','news.category_id = news_category.id');
        $this->db->like($this->table.'.title', $keywords);
        $this->db->where($this->table.'.is_deleted', 0);

        if ($categoryId !== NULL) {
            $this->db->where($this->table.'.category_id', $categoryId);
        }
        
        if ( !empty($is_active) ) {
            $this->db->where($this->table.'.is_active', $is_active);
        }

        return $result = $this->db->get()->num_rows();
    }
}