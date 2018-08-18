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
		$data['wisata']= $this->m_nabire->wisata();
		$this->load->view('contact');
	}



	public function artikel()
	{
		$uri= $this->uri->segment('3');
		$data['wisata']= $this->m_nabire->wisata();
		$data['jml_artikel']= $this->m_nabire->jml_artikel();
		$data['jml_wisata']= $this->m_nabire->jml_wisata();

		$this->load->view('wisata',$data);
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
