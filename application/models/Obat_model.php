<?php

class Obat_model extends CI_Model{
    function get(){
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->join('kategori', 'obat.id_kategori = kategori.id_kategori', 'left');
        $this->db->join('admin','obat.id_admin = admin.id_admin', 'left');
        return $this->db->get()->result_array();
    }
    function save($data){
        $this->db->insert('obat',$data);
    }
    function del($kd_obat){
        $this->db->where('kd_obat',$kd_obat)->delete('obat');
    }
    function update($kd_obat,$data){
        $this->db->where('kd_obat',$kd_obat)->update('obat',$data);
    }
    function find($kd_obat){
        return $this->db->where('kd_obat',$kd_obat)->get('obat')->row_array();
    }
    function show(){
        return $this->db->get('obat')->result();
    }
    function page($kd_obat){
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->where('kd_obat', $kd_obat);
        $this->db->join('kategori', 'obat.id_kategori = kategori.id_kategori', 'left');
        $this->db->join('admin','obat.id_admin = admin.id_admin', 'left');
        return $this->db->get()->result_array();
    }
    function sli(){
        return $this->db->page('obat')->result();
    }
}
