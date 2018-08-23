<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');

    }

    public function pages($page = 'index'){
        if ( ! file_exists(APPPATH.'views/nimda/'.$page.'.php') ) {
            show_404();
        }
        $data['jml_pesan']  = $this->m_admin->jml_pesan();
        $data['ttl_pesan']  = $this->m_admin->ttl_pesan();
    		$data['data_pesan']  = $this->m_admin->data_pesan();
        // pesan
      	$data['wisata']  = $this->m_admin->wisata();
      	$data['wilayah']  = $this->m_admin->wilayah();
        // wisata dan Wilayah
        $id_wilayah=$this->uri->segment(3);
        $data['edit_wilayah']=$this->m_admin->edit_wilayah($id_wilayah);
        // edit wilayah dan wisata
    		$data['jml_artikel']= $this->m_admin->jml_artikel();
    		$data['jml_wisata']= $this->m_admin->jml_wisata();
        // nampilin jml
        $this->load->view('nimda/'.$page,$data);
    }




}
