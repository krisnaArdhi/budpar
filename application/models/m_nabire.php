
  <?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
  class M_nabire extends CI_Model
  {
   public function __construct()
   {
    parent::__construct();
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
    function data_post($uri)
    {

      $this->db->where('uri',$uri);
      $query = $this->db->get('posts');
      $total = $query->result();
      return $total;
     }

  }
  ?>
