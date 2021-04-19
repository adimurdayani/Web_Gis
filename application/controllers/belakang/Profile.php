<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        if (!$this->session->userdata('email')) {
            redirect('login/login');
        }
    }


    public function index()
    {
        $data = [
            'judul'     => 'Profil | Admin',
            'all_user'  => $this->db->get('user')->result_array(),
            'get_user'  => $this->m_user->get_user(),
            'isi'       => 'belakang/profile/profile'
        ];
        $this->load->view('template_belakang/wraper', $data, FALSE);
    }
}

/* End of file Profile.php */
