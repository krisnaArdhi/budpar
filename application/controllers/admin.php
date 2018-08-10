<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
 parent::__construct();
 $this->load->model('m_admin');
 }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('ajaxcrud');
	}
  public function wisata()
	{
		$data['wisata']  = $this->m_admin->wisata();
		$data['wilayah']  = $this->m_admin->wilayah();

		$this->load->view('admin/adminwisata',$data);
	}
	public function wilayah()
	{
		$data['wilayah']  = $this->m_admin->wilayah();
		$this->load->view('admin/adminwilayah');
	}
	public function blog()
	{
		$data['wisata']  = $this->m_admin->wisata();
		$this->load->view('admin/adminwisata',$data);
	}

	function tambah_wisata()
 {
	if (isset($_POST['mysubmit']))
		{
	$data = array(
	'id_wilayah'     => $this->input->post('id_wilayah'),
	'nama_wisata'     => $this->input->post('nama_wisata'),
	'keterangan'   => $this->input->post('deskripsi'),
	'gambar'   => $this->input->post('foto')
	);
	 $hasil=$this->m_admin->simpan_wisata($data);
	 if ($hasil){
			 redirect('admin/wisata');
	 }else{
		echo "Simpan data gagal";
	 }
	 echo "<br/>";
	 echo anchor('admin/wisata');
	}
	else{
		$this->load->view('tambahpetugas');
	}
	}

	function tambah_wilayah()
 {
	if (isset($_POST['mysubmit']))
		{
	$data = array(
	'nama_wilayah'     => $this->input->post('nama_wilayah')
	);
	 $hasil=$this->m_admin->simpan_wilayah($data);
	 if ($hasil){
			 redirect('admin/wilayah');
	 }else{
		echo "Simpan data gagal";
	 }
	 echo "<br/>";
	 echo anchor('admin/wilayah');
	}
	else{
		$this->load->view('tambahpetugas');
	}
	}

	function fetch_wilayah()
	{
	 $output = '';
	 $query = '';
	 if($this->input->post('query'))
	 {
		$query = $this->input->post('query');
	 }
	 $data = $this->m_admin->fetch_data_wilayah($query);
	 $output .= '

			<table class="table table-borderless table-striped table-earning">
			 <tr>
				<th>Nama wilayah</th>
				<th></th>

			 </tr>
	 ';
	 if($data->num_rows() > 0)
	 {
		foreach($data->result() as $row)
		{
		 $output .= '
			 <tr>
			 <td>'.$row->nama_wilayah.'</td>
				<td class="text-right" ><a href="'.base_url().'admin/edit_wilayah/'.$row->id_wilayah.'"> <button class="btn btn-primary btn-sm">
					Edit</button></a><a href="'.base_url().'admin/edit_wilayah/'.$row->id_wilayah.'"> <button class="btn btn-danger btn-sm">
						delete</button></a></td>

			 </tr>
		 ';
		}
	 }
	 else
	 {
		$output .= '<tr>
				<td colspan="5">No Data Found</td>
			 </tr>';
	 }
	 $output .= '</table>';
	 echo $output;
	}

	function fetch_wisata()
	{
	 $output = '';
	 $query = '';
	 if($this->input->post('query'))
	 {
		$query = $this->input->post('query');
	 }
	 $data = $this->m_admin->fetch_data_wisata($query);
	 $output .= '

	 <table class="table table-borderless table-striped table-earning">

			 <tr>
				<th>Wisata</th>
				<th>Wilayah</th>
				<th></th>


			 </tr>
	 ';
	 if($data->num_rows() > 0)
	 {
		foreach($data->result() as $row)
		{
		 $output .= '
			 <tr>
				<td>'.$row->nama_wisata.'</td>
				<td>'.$row->nama_wilayah.'</td>
				<td class="text-right" ><a href="'.base_url().'admin/edit_wilayah/'.$row->id_wisata.'"> <button class="btn btn-primary btn-sm">
					Edit</button></a><a href="'.base_url().'admin/delete_wilayah/'.$row->id_wisata.'"> <button class="btn btn-danger btn-sm" name="delete" value="'.$row->id_wisata.'">
						delete</button></a></td>

			 </tr>
		 ';
		}
	 }
	 else
	 {
		$output .= '<tr>
				<td colspan="5">No Data Found</td>
			 </tr>';
	 }
	 $output .= '</table>';
	 echo $output;
	}

	function delete_wilayah()
      {
           // $this->load->model("crud_model");
           $this->crud_model->m_admin($_POST["id_wilayah"]);
           echo 'Data Deleted';
      }
			function edit_wilayah()
					{
							 // $this->load->model("crud_model");
							 $keluar= $this->input->post('delete');
							 echo $keluar;
					}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
