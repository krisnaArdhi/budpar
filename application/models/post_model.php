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


    public function create_post() {
        $uri = url_title($this->input->post('judul'));

        $data = array(
            'judul' => $this->input->post('judul'),
            'uri' => $uri,
            'artikel' => $this->input->post('artikel')
        );

        return $this->db->insert('posts', $data);
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('posts');
        return true;
    }
}
