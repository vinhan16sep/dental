<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Config_model extends Single_model{
	

    public $table = 'config';
	function __construct(){
		parent::__construct();
	}

	public function get_by_id($id=''){
        $this->db->from('config');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function get_by_key($key=''){
        $this->db->from('config');
        $this->db->where('my_key', $key);
        return $this->db->get()->row_array();
    }
       
}