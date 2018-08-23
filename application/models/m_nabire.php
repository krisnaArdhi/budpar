
  <?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
  class M_nabire extends CI_Model
  {
   public function __construct()
   {
    parent::__construct();
   }

   public function kirim_pesan($data)
   {
       $hasil=$this->db->insert('pesan',$data);

     return $hasil;
   }
   function get_wisata_list($limit, $start){
        $query = $this->db->get('wisata', $limit, $start);
        return $query;
    }
   function jml_artikel()
   {
     $query = $this->db->get('posts');
     $total = $query->num_rows();
     return $total;
    }
    function jml_wisata()
    {
      $query = $this->db->get('wisata');
      $total = $query->num_rows();
      return $total;
     }
   function post()
    {
      $query = $this->db->get('posts');
      return $query->result();
    }
    function wisata()
     {
       $query = $this->db->get('wisata');
       return $query->result();
     }
     function tampil_wisata()
     // nampilin data slide wisata di index
      {
        $this->db->like('tampil',"1");
        $query = $this->db->get('wisata');
        return $query->result();
      }
     function content_wisata($uri)
      {
        $this->db->where('uri',$uri);
        $query = $this->db->get('wisata');
        return $query->result();
      }
    function data_post($uri)
    {

      $this->db->where('uri',$uri);
      $query = $this->db->get('posts');
      $total = $query->result();
      return $total;
     }

  }
  ?>
