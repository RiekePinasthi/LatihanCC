<?php

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model', 'm');
    }

    function index() {
        $admin = $this->m->get();
        $data=array(
                        'admin'=>$admin,
                        'content'=>'admin/list_admin'
                    );
        $this->load->view('admin/template', $data);
    }

    function form() {
         $data=array(
             
                        'content'=>'admin/admin_form'
                    );
        $this->load->view('admin/template', $data);
        
    }

    function save() {
        
            $this->m->save($this->input->post());
            redirect('admin');
        
    }

    function del($id_admin) {
        $r = $this->m->find($id_admin);
        $f = './foto/'.$r['foto'];
        unlink($f);
        $this->m->del($id_admin);
        redirect('admin');
    }

    function edit($id_admin) {
         $data=array(
                        'data'=> $this->m->find($id_admin),
                        'content'=>'admin/admin_form'
                    );
        $this->load->view('admin/template', $data);
    }
    function update(){
        $id_admin = $this->input->post('id_admin');
        $data = $this->input->post();
        $this->m->update($id_admin,$data);
        redirect('admin');
    }
    function login()
    {
        if(isset($_POST['submit'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hasil = $this->m->login($username,$password);
            if($hasil->num_rows()==1){
                foreach ($hasil->result()as $h){
                $data_session = array(
                    'status'=>'login',
                    'id_admin'=>$h->id_admin,
                    'username'=>$h->username,
                );
                $this->session->set_userdata($data_session);
                redirect('admin');
            }
        }else{
            redirect('obat');
        }
    }else{
        $this->load->view('form_login');
    }
}
function logout()
{
    $this->session->sess_destroy();
    redirect('home');

}
}