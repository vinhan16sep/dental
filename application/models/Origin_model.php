<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Origin_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'origin';

	function __construct(){
		parent::__construct();
	}

	public function get_active() {
        $this->db->select('*');
        $this->db->from('origin');
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);
        $this->db->order_by('id', 'asc');

        return $result = $this->db->get()->result_array();
    }
}