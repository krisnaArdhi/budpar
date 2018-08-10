<?php
class Post_model extends CI_Model {

    public function create_post() {
        $uri = url_title($this->input->post('judul'));

        $data = array(
            'judul' => $this->input->post('judul'),
            'uri' => $uri,
            'artikel' => $this->input->post('artikel')
        );

        return $this->db->insert('posts', $data);
    }
}
