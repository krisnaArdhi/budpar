<?php
class Post_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }
    
    public function get_posts($uri = FALSE){
        if ($uri === FALSE) {
            $query = $this->db->get('posts');
            return $query->result_array();
        }

        $query = $this->db->get_where('posts', array('uri' => $uri));
        return $query->row_array();
    }


    public function create_post($post_image) {
        $uri = url_title($this->input->post('judul'));

        $data = array(
            'judul' => $this->input->post('judul'),
            'uri' => $uri,
            'artikel' => $this->input->post('artikel',FALSE),
            'post_image' => $post_image 
        );

        return $this->db->insert('posts', $data);
    }
    
    public function delete($id){

        $this->db->where('id',$id);
        $this->db->delete('posts');
        
        return true;
    }

    public function update_post($post_image){
        $uri = url_title($this->input->post('judul'));
        
        if ($post_image === 'noimage.jpg') {
         $data = array(
            'judul' => $this->input->post('judul'),
            'uri' => $uri,
            'artikel' => $this->input->post('artikel',FALSE)
        );
   
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'uri' => $uri,
                'artikel' => $this->input->post('artikel',FALSE),
                'post_image' => $post_image 
            );
        }

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('posts', $data);

    }
}
