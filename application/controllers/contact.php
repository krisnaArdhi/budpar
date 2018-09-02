<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct(){
 parent::__construct();
 $this->load->model('m_nabire');
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
		$this->load->view('contact');
	}

	function kirim()
 {
	if (isset($_POST['mysubmit']))
		{

	$data = array(
	'nama'     => $this->input->post('name'),
	'email'     => $this->input->post('email'),
	'pesan'   => $this->input->post('message')
	);
	 $hasil=$this->m_nabire->kirim_pesan($data);
	 if ($hasil){
			 redirect('contact');
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


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
