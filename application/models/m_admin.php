
  <?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
  class M_admin extends CI_Model
  {
   public function __construct()
   {
    parent::__construct();
   }


       function jml_pesan()
       {

         $this->db->where('status',"0");
         $query = $this->db->get('pesan');
         $total = $query->num_rows();
         return $total;
        }
        function ttl_pesan()
        {
          $query = $this->db->get('pesan');
          $total = $query->num_rows();
          return $total;
         }
         function jml_wisata()
         {
           $query = $this->db->get('wisata');
           $total = $query->num_rows();
           return $total;
         }function jml_artikel()
          {
            $query = $this->db->get('posts');
            $total = $query->num_rows();
            return $total;
           }
        function data_pesan()
        {

          // $this->db->where('status',"0");
          $this->db->like('status',"0");
           $this->db->or_like('status',"1");
          $query = $this->db->get('pesan');
          $total = $query->result();
          return $total;
         }

         function fetch_data_pesan($query)
         {
          $this->db->select("*");
          $this->db->from("pesan");
          if($query != '')
          {
            $this->db->like('email', $query);

          }
          $this->db->order_by('id_pesan', 'DESC');
          return $this->db->get();
         }

         function terima_pesan($id_pesan)
         {

           $this->db->where('id_pesan',$id_pesan);
           $query = $this->db->update('pesan',array('status'=>'1'));


          }
         function isi_pesan($id_pesan)
         {

           $this->db->where('id_pesan',$id_pesan);
           $query = $this->db->get('pesan');
           $total = $query->result();
           return $total;
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

         function fetch_data_edit_wilayah($query)
         {
          $this->db->select("*");
          $this->db->from("wilayah");
          if($query != '')
          {
           $this->db->like('id_wilayah', $query);
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




            function delete_wilayah($id)
      {
           $this->db->where("id_wilayah", $id);
           $this->db->delete("wilayah");
           //DELETE FROM users WHERE id = '$user_id'
      }
  }
  ?>
