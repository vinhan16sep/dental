<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Partner_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'partner';

	function __construct(){
		parent::__construct();
	}

	public function fetch_all($limit = false) {
        $this->db->from('partner');
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);

        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        $this->db->order_by("id", "desc");

        return $this->db->get()->result_array();
	}

	public function fetch_relate($ignore_id, $limit = false) {
        $this->db->from('partner');
        $this->db->where('id !=', $ignore_id);
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);

        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        $this->db->order_by("id", "desc");

        return $this->db->get()->result_array();
	}

    public function get_by_origin_id($origin_id='', $limit=false)
    {
        $this->db->select(
            'partner.*'
        );

        $this->db->from('partner');
        $this->db->where('partner.is_deleted', 0);
        $this->db->where('partner.is_active', 1);
        $this->db->where('partner.origin_id', $origin_id);
        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        return $this->db->get()->result_array();
    }

    public function get_all_with_pagination_search_edit($is_active = '',$order = 'desc', $limit = NULL, $start = NULL, $keywords = '', $originId = NULL) {
        $this->db->select($this->table.'.*, partner_origin.title as partner_origin_title');
        $this->db->from($this->table);
        $this->db->join('partner_origin','partner.origin_id = partner_origin.id');
        $this->db->like($this->table.'.title', $keywords);
        $this->db->where($this->table.'.is_deleted', 0);

        if ($originId !== NULL) {
            $this->db->where($this->table.'.origin_id', $originId);
        }

        if ( !empty($is_active) ) {
            $this->db->where($this->table.'.is_active', $is_active);
        }
        $this->db->limit($limit, $start);
        $this->db->order_by($this->table.'.id', $order);

        return $result = $this->db->get()->result_array();
    }

    public function count_search($is_active = '',$order = 'desc', $limit = NULL, $start = NULL, $keywords = '', $originId = NULL){
        $this->db->select($this->table.'.*, partner_origin.title as partner_origin_title');
        $this->db->from($this->table);
        $this->db->join('partner_origin','partner.origin_id = partner_origin.id');
        $this->db->like($this->table.'.title', $keywords);
        $this->db->where($this->table.'.is_deleted', 0);

        if ($originId !== NULL) {
            $this->db->where($this->table.'.origin_id', $originId);
        }
        
        if ( !empty($is_active) ) {
            $this->db->where($this->table.'.is_active', $is_active);
        }

        return $result = $this->db->get()->num_rows();
    }
}