
  <?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
  class M_admin extends CI_Model
  {
   public function __construct()
   {
    parent::__construct();
   }

       function wisata()
        {
          $this->db->join('wilayah','wisata.id_wilayah=wilayah.id_wilayah');
          $query = $this->db->get('wisata');
              return $query->result();
        }
        function wilayah()
         {
           $query = $this->db->get('wilayah');
               return $query->result();
         }
        function edit_wilayah($id_wilayah)
         {
           $this->db->where('id_wilayah',$id_wilayah);
           $query = $this->db->get('wilayah');
           return $query->result_array();
         }
         public function simpan_edit_wilayah($data)
         {

             $this->db->where('id_wilayah',$data['id_wilayah']);
             $hasil=$this->db->update('wilayah',$data);

           return $hasil;
         }

         function fetch_data_wilayah($query)
         {
          $this->db->select("*");
          $this->db->from("wilayah");
          if($query != '')
          {
           $this->db->like('nama_wilayah', $query);
          }
          $this->db->order_by('id_wilayah', 'DESC');
          return $this->db->get();
         }

         function fetch_data_wisata($query)
         {
         $this->db->join('wilayah','wisata.id_wilayah=wilayah.id_wilayah');
          $this->db->select("*");
          $this->db->from("wisata");
          if($query != '')
          {
           $this->db->like('nama_wisata', $query);
          }
          $this->db->order_by('id_wisata', 'DESC');
          return $this->db->get();
         }


          public function simpan_wisata($data)
          {
              $this->db->insert('wisata', $data);
              $hasil = $this->db->insert_id();
              return $hasil;
          }
          public function simpan_wilayah($data)
          {
              $this->db->insert('Wilayah', $data);
              $hasil = $this->db->insert_id();
              return $hasil;
          }


          public function GetCatSearchName($search_name)
          {
            $qry = $this->db->select('*')->from('wilayah')
                            ->where("nama_wilayah LIKE '%$search_name%'")
                            ->get()->result(); // select data like rearch value.
            return $qry;
            }

            function delete_wilayah($id)
      {
           $this->db->where("id_wilayah", $id);
           $this->db->delete("wilayah");
           //DELETE FROM users WHERE id = '$user_id'
      }
  }
  ?>
