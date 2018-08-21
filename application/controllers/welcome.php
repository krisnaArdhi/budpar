<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
 parent::__construct();
 $this->load->model('m_nabire');
 $this->load->library('pagination');

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

		//konfigurasi pagination
			 $config['base_url'] = site_url('welcome/index'); //site url
			 $config['total_rows'] = $this->db->count_all('wisata'); //total row
			 $config['per_page'] = 4;  //show record per halaman
			 $config["uri_segment"] = 3;  // uri parameter
			 $choice = $config["total_rows"] / $config["per_page"];
			 $config["num_links"] = floor($choice);

			 // Membuat Style pagination untuk BootStrap v4
		 $config['first_link']       = 'First';
			 $config['last_link']        = 'Last';
			 $config['next_link']        = '&raquo;';
			 $config['prev_link']        = '&laquo;';
			 $config['full_tag_open']    = '<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft"><ul class="pagination">';
			 $config['full_tag_close']   = '</ul></div>';
			 $config['num_tag_open']     = '<li>';
			 $config['num_tag_close']    = '</li>';
			 $config['cur_tag_open']     = '<li class="active"><span class="page-link">';
			 $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			 $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			 $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			 $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			 $config['prev_tagl_close']  = '</span>Next</li>';
			 $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			 $config['first_tagl_close'] = '</span></li>';
			 $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			 $config['last_tagl_close']  = '</span></li>';

			 $this->pagination->initialize($config);
			 $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

			 //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model.
			 $data['data'] = $this->m_nabire->get_wisata_list($config["per_page"], $data['page']);

			 $data['pagination'] = $this->pagination->create_links();

		$data['wisata']= $this->m_nabire->tampil_wisata();
		$data['jml_artikel']= $this->m_nabire->jml_artikel();
		$data['jml_wisata']= $this->m_nabire->jml_wisata();
		$data['post']= $this->m_nabire->post();

		$this->load->view('index',$data);
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
