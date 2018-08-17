<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('post_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $this->load->helper('form');
        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('nimda/post',$data);

    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('artikel','Artikel','required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('nimda/posts/create');
        } else{
            $this->post_model->create_post();
            redirect('admin/post');
        }
    }

    public function delete($id){
        $this->load->helper('form');
        $this->post_model->delete($id);
        redirect('admin/post');

    }

    public function edit($uri){
        $this->load->helper('form');
        $data['post'] = $this->post_model->get_posts($uri);

        $this->load->view('nimda/posts/edit',$data);

    }

    public function update(){
        $this->post_model->update_post();
        redirect('admin/post'); 
    }




}


