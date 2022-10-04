<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonModel extends CI_Model{
    function __construct()
    {
        parent:: __construct();
    }

    // *** Common Select***
    function common_select($table,$field='*',$where=false,$orderBy=false,$sort='ASC'){
        $this->db->select($field);
        $this->db->from($table);
        if($where) $this->db->where($where);
        if($orderBy) $this->db->order_by($$orderBy,$sort);

        $data = $this->db->get()->result();
        if($data){
            return $data;
        }else{
            return false;
        }
    }
  // ? *** Common Insert***
    function common_insert($table,$values){
        $this->db->inser($table,$values);
        return $this->db->insert_id();

    }

 //  ! Common Insert***
    function common_update($table,$values,$where){
        $this->db->where($where)->update($table,$values);
        return $this->db->affected_rows();

    }

    function common_delete($table,$where){
            $this->db->delete($table,$where);
            return $this->db->affected_rows();
    }
}