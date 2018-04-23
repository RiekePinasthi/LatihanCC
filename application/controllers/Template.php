<?php

class Template extends CI_Controller{
       function __construct() {
        parent::__construct();
        $this->load->model('Obat_model', 'm');
        $this->load->model('Kategori_model', 'k');
    }
   function index(){
       $data = array(
           'title' => 'My Template',
           'obat'=>$this->m->show()
       );
       $this->load->view('tampilan', $data);
   }
   function show($kd_obat){
        $data = array(
           'title' => 'My Template',
           'obat'=>$this->db->where('kd_obat', $kd_obat)->get('obat')->result_array()
       );
       $this->load->view('page', $data);
    }
    function profil(){
        
       $this->load->view('profil',[]);
    }
     function gambar(){
        
       $this->load->view('gambar',[]);
    }
}
