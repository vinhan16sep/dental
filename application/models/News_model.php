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
}