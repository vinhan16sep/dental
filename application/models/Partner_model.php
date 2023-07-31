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
}