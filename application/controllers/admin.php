<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    public function pages($page = 'index'){
        if ( ! file_exists(APPPATH.'views/nimda/'.$page.'.php') ) {
            show_404();
        }

        $this->load->view('nimda/'.$page);
    }
}


