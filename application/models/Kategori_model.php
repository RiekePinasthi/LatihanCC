<?php

class Kategori_model extends CI_Model{
    function get(){
        return $this->db->get('kategori')->result_array();
    }
    function save($data){
        $this->db->insert('kategori',$data);
    }
    function del($id_kategori){
        $this->db->where('id_kategori',$id_admin)->delete('kategori');
    }
    function update($id_kategori,$data){
        $this->db->where('id_kategori',$id_admin)->update('kategori',$data);
    }
    function find($id_kategori){
        return $this->db->where('id_kategori',$id_kategori)->get('kategori')->row_array();
    }
}
