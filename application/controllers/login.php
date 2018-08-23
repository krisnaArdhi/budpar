<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

     function index() {
        $this->load->view('login');
    }

    function cek_login() {

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $cek = $this->m_login->cek($email, $password);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {

                    $sess_data['email'] = $qad->email;
                    $sess_data['status'] = $qad->status;

                    $this->session->set_userdata($sess_data);
                }
                $email = $this->session->userdata('email');
                redirect('admin/index');
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('gagal');
            }

    }

     function logout() {
        $this->session->sess_destroy();
        redirect('keluar');
    }





}
