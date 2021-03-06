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
            mkdir('./assets/images/posts/newpost',0777);
        } else{
            $config['upload_path'] = './assets/images/posts/newpost';
            $config['allowed_types'] = 'gif|jpg|png|';
            $config['max_size'] = '2048';
            
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
                
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];                
            } 


            $this->post_model->create_post($post_image);
            $uri = url_title($this->input->post('judul'));
            rename('./assets/images/posts/newpost', './assets/images/posts/'.$uri);
            redirect('admin/post');
        }
    }

    public function delete($uri){
        $this->load->helper('form');
        $this->post_model->delete($uri);
        $imglist = file('./assets/images/posts/'.$uri.'/img.txt');
        echo $imglist;
        foreach ($imglist as $img) {
            echo $img;
            delete('./assets/images/posts/textImage/'.$img);
            echo "berhasil";
        }

    }

    public function edit($uri){
        $this->load->helper('form');
        $data['post'] = $this->post_model->get_posts($uri);

        $this->load->view('nimda/posts/edit',$data);

    }

    public function update($uri){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('artikel','Artikel','required');

        if ($this->form_validation->run()===TRUE){
            $newuri = url_title($this->input->post('judul'));
            rename('./assets/images/posts/'.$uri,'./assets/images/posts/'.$newuri);
            $config['upload_path'] = './assets/images/posts/'.$newuri;
            $config['allowed_types'] = 'gif|jpg|png|';
            $config['max_size'] = '2048';
            
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
                
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];                
            } 


        $this->post_model->update_post($post_image);
        redirect('admin/post'); 
        }
    }

    public function textImage(){
        if(isset($_FILES["file"]["name"])){
          //$imgfile = fopen('./assets/images/posts/newpost/img.txt','a+');
          $config['upload_path'] = './assets/images/posts/textImage/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $this->load->library('upload', $config);
          if(!$this->upload->do_upload('file')){
              $this->upload->display_errors();
              return FALSE;
          } else{
              $this->upload->data();
              file_put_contents('./assets/images/posts/newpost/img.txt',$_FILES['file']['name']."\n",FILE_APPEND);

              echo base_url().'assets/images/posts/textImage/'.$_FILES['file']['name'];
          }
        }
    }

    public function textImageUpdate($uri){
        if(isset($_FILES["file"]["name"])){
          //$imgfile = fopen('./assets/images/posts/newpost/img.txt','a+');
          $config['upload_path'] = './assets/images/posts/textImage/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $this->load->library('upload', $config);
          if(!$this->upload->do_upload('file')){
              $this->upload->display_errors();
              return FALSE;
          } else{
              $this->upload->data();
              file_put_contents('./assets/images/posts/'.$uri.'/img.txt',$_FILES['file']['name']."\n",FILE_APPEND);

              echo base_url().'assets/images/posts/textImage/'.$_FILES['file']['name'];
          }
        }
    }

}


