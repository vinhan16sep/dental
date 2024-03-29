<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Banner_model extends Single_model{
	
    
    /**
     * [$table description]
     * @var string
     */
    public $table = 'banner';

    function __construct(){
        parent::__construct();
    }

    public function fetch_all($limit = false) {
        $this->db->from('banner');
        $this->db->where('is_deleted', 0);
        $this->db->where('is_active', 1);

        if ($limit !== false) {
            $this->db->limit($limit, 0);
        }
        $this->db->order_by("id", "desc");

        return $this->db->get()->result_array();
	}
	// public $table = 'banner';
	// public function get_by_parent_id($parent_id, $order = 'desc',$lang = ''){
	// 	$this->db->select($this->table .'.*, '. $this->table_lang .'.title');
 //        $this->db->from($this->table);
 //        $this->db->join($this->table_lang, $this->table_lang .'.'. $this->table .'_id = '. $this->table .'.id');
 //        $this->db->where($this->table .'.is_deleted', 0);
 //        if($lang != ''){
 //            $this->db->where($this->table_lang .'.language', $lang);
 //        }
 //        if(is_numeric($parent_id)){
 //            $this->db->where($this->table .'.id', $parent_id);
 //        }
    	
 //        $this->db->group_by($this->table_lang .'.'. $this->table .'_id');
 //        $this->db->order_by($this->table .".id", $order);

 //        return $result = $this->db->get()->row_array();
	// }
 //    public function get_all($data = array()){
 //        $this->db->where('is_deleted',0);
 //        $this->db->where($data);
 //        return $this->db->get($this->table)->result_array();
 //    }
}