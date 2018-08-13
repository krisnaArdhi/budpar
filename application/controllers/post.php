<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    public function pages($page = index){
        if ( ! file_exists(APPPATH.'views/nimda/'.$page.'.php') ) {
            show_404();
        }

        $this->load->view('nimda/'.$page);
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('artikel','Artikel','required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('nimda/posts/create');
        } else{
            $this->load->view('nimda/index');
        }
    }

}


