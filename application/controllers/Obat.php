<?php

class Obat extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Obat_model', 'm');
        $this->load->model('Kategori_model', 'k');
        if($this->session->userdata('status')!="login"){
            redirect('home');
        }
    }

    function index() {
        $obat = $this->m->get();
        $data=array(
                        'obat'=>$obat,
                        'content'=>'admin/list_obat'
                    );
        $this->load->view('admin/template', $data);
    }

    function form() {
         $data=array(
             
                        'content'=>'admin/obat_form',
                        'kategori'=>$this->k->get(),
                    );
        $this->load->view('admin/template', $data);
        
    }

    function save() {
            $config['upload_path'] = './foto/';
        $config['allowed_types'] = 'gif|jpg|png|bmp|rar|zip|doc';
        $config['max_size'] = '10000';
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload('foto')){
            echo '<pre>';
            print_r($this->upload->display_errors());
        }  else {
            $gambar = $this->upload->data();
            $_POST['foto'] = $gambar['file_name'];
            $tanggal = date('Y-m-d');
            $pukul = date("H:i:s");
            $data = array(
                'nama_obat'=>  $this->input->post('nama_obat'),
                'guna_obat'=>  $this->input->post('guna_obat'),
                'tanggal'=>  $tanggal,
                'pukul'=> $pukul,
                'id_kategori'=>  $this->input->post('id_kategori'),
                'foto'=>$_POST['foto'], 
            );
            $this->m->save($data);
            redirect('obat');
        
    }
    }
    function del($kd_obat) {
        $r = $this->m->find($kd_obat);
        $f = './foto/'.$r['foto'];
        unlink($f);
        $this->m->del($kd_obat);
        redirect('obat');
    }

    function edit($kd_obat) {
         $data=array(
                        'data'=> $this->m->find($kd_obat),
                        'content'=>'admin/obat_form'
                    );
        $this->load->view('admin/template', $data);
    }
    function update(){
        $kd_obat = $this->input->post('kd_obat');
        $data = $this->input->post();
        $this->m->update($kd_obat,$data);
        redirect('obat');
    }
    
}
