<?php

class Admin_model extends CI_Model{
    function get(){
        return $this->db->get('admin')->result_array();
    }
    function save($data){
        $this->db->insert('admin',$data);
    }
    function del($id_admin){
        $this->db->where('id_admin',$id_admin)->delete('admin');
    }
    function update($id_admin,$data){
        $this->db->where('id_admin',$id_admin)->update('admin',$data);
    }
    function find($id_admin){
        return $this->db->where('id_admin',$id_admin)->get('admin')->row_array();
    }
    function login($username,$password){
  return  $this->db->get_where('admin',array ('username'=>$username, 'password'=>$password));
    }
}
