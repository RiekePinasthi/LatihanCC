<?php

class Kategori extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model', 'k');
    }

    function index() {
        $kategori = $this->k->get();
        $data=array(
                        'kategori'=>$kategori,
                        'content'=>'admin/list_kategori'
                    );
        $this->load->view('admin/template', $data);
    }

    function form() {
         $data=array(
             
                        'content'=>'admin/kategori_form'
                    );
        $this->load->view('admin/template', $data);
        
    }

    function save() {
        
            $this->k->save($this->input->post());
            redirect('kategori');
        
    }

    function del($id_kategori) {
        $r = $this->k->find($id_kategori);
        $f = './foto/'.$r['foto'];
        unlink($f);
        $this->k->del($id_kategori);
        redirect('kategori');
    }

    function edit($id_kategori) {
         $data=array(
                        'data'=> $this->k->find($id_kategori),
                        'content'=>'admin/kategori_form'
                    );
        $this->load->view('admin/template', $data);
    }
    function update(){
        $id_kategori = $this->input->post('id_kategori');
        $data = $this->input->post();
        $this->k->update($id_kategori,$data);
        redirect('kategori');
    }
}
