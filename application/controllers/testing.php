<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class testing extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->form_validation->set_rules('nama','Nama','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('testing');
        }else{
            $dirname = $this->input->post('nama');
            echo $dirname;
            $dirname = './assets/testing/'.$dirname; 
            echo $dirname;
            if (!is_dir($dirname)){
                #mkdir('.assets/testing/'.$dirname);
                mkdir($dirname,0777,true);
                symlink($dirname,'./assets/testing/hahaha');
            }else{
                echo 'exist';
            }
        }
    }
}

