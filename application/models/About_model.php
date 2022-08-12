<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class About_model extends Single_model{
	
	/**
	 * [$table description]
	 * @var string
	 */
	public $table = 'about';

	function __construct(){
		parent::__construct();
	}

    public function get_by_type($type = '') {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('type', $type);

        return  $this->db->get()->row_array();
    }

    public function update_by_type($type, $data){
         $this->db->where('type', $type);

        return $this->db->update($this->table, $data);
    }
}