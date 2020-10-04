<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_M extends MY_Model {
    protected $table = 'db_danhmuc';
    protected $key   = 'id';
    
    public function check_alias($alias,$id){
        $this->db->where('alias_vn',$alias);
        $this->db->where('id !=',$id);
        return $this->db->get($this->table)->result_array();
    }

    // public function getMaxCateStt($cate_parent_id){
    //    	$this->db->select_max('cate_stt');
    //     $this->db->where('cate_parent_id',$cate_parent_id);
    //     return $this->db->get($this->table)->row_array();
    // }
}

/* End of file Category_M.php */
/* Location: ./application/models/Category_M.php */