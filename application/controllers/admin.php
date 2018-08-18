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
		$data['jml_pesan']  = $this->m_admin->jml_pesan();
		$data['data_pesan']  = $this->m_admin->data_pesan();

		$this->load->view('admin/index',$data);
	}

	public function pesan()
	{
		$data['jml_pesan']  = $this->m_admin->jml_pesan();
		$data['data_pesan']  = $this->m_admin->data_pesan();

		$this->load->view('admin/data_pesan',$data);
	}
	public function baca_pesan()
	{
		$id_pesan = $this->uri->segment(3);
		$hasil=$this->m_admin->terima_pesan($id_pesan);
 	 if ($hasil){
		 $data['jml_pesan']  = $this->m_admin->jml_pesan();
		 $data['data_pesan']  = $this->m_admin->isi_pesan($id_pesan);
		 $this->load->view('admin/isi_pesan',$data);
 	 }else{
		 $data['jml_pesan']  = $this->m_admin->jml_pesan();
 		$data['data_pesan']  = $this->m_admin->isi_pesan($id_pesan);
 		$this->load->view('admin/isi_pesan',$data);
 	 }
 	}

	function fetch_pesan()
	// mendapatkan seluruh data email dan live search
	{
	 $output = '';
	 $query = '';
	 if($this->input->post('query'))
	 {
		$query = $this->input->post('query');
	 }
	 $data = $this->m_admin->fetch_data_pesan($query);

	 if($data->num_rows() > 0)
	 {
		foreach($data->result() as $row)
		{
		 $output .= '
		 <div class="au-task__item au-task__item--primary">
				 <div class="au-task__item-inner">
						 <h5 class="task">
						 		 <a href="'.base_url().'admin/baca_pesan/'.$row->id_pesan.'">'.$row->pesan.'</a>
								 <a href="'.base_url().'admin/baca_pesan/'.$row->id_pesan.'">'.$row->pesan.'</a>
						 </h5>
						 <span class="time">02:00 PM</span>
				 </div>
		 </div>
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

  public function wisata()
	{
		$data['wisata']  = $this->m_admin->wisata();
		$data['wilayah']  = $this->m_admin->wilayah();

		$this->load->view('admin/adminwisata');
	}
	public function wilayah()
	{
		$data['wilayah']  = $this->m_admin->wilayah();
		$this->load->view('admin/adminwilayah');
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
					Edit</button></a><a href="'.base_url().'admin/konfirm_delete_wilayah/'.$row->id_wilayah.'"> <button class="btn btn-danger btn-sm">
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
				<th>Deskripsi</th>
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
				<td>'.$row->keterangan.'</td>

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



			function edit_wilayah()
					{
						$id=$this->uri->segment(3);
					  $data['wilayah']=$this->m_admin->edit_wilayah($id);
					  $this->load->view('admin/editwilayah',$data);

					}

					function simpan_edit_wilayah()
				 {
					if (isset($_POST['mysubmit']))
						{
					$data = array(
						'id_wilayah' => $this->input->post('id_wilayah'),
					'nama_wilayah'     => $this->input->post('nama_wilayah')
					);
					 $hasil=$this->m_admin->simpan_edit_wilayah($data);
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


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
