<?php


class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model', 'm');
    }

    function index() {
                        
        $this->load->view('form_login');
    }

  
}