<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
            'judul'     => 'Data User | Halaman Admin',
            'list_user' => $this->db->get('user')->result_array(),
            'get_user' => $this->m_user->get_user(),
            'isi'       => 'belakang/users/list_user'
        ];
        $this->load->view('template_belakang/wraper', $data, FALSE);
    }

    public function tbh_user()
    {
        $data = [
            'judul' => 'Tambah User | Halaman Admin',
            'get_user' => $this->m_user->get_user(),
            'isi'   => 'belakang/users/tbh_user'
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[conf_password]');
        $this->form_validation->set_rules('conf_password', 'Konfirmasi Password', 'trim|required|min_length[6]|matches[password]');
        $this->form_validation->set_rules('no_hp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            $this->m_user->tbh_user();
        }
    }
    public function edit_user($id)
    {
        $data = [
            'judul'     => 'Edit User | Halaman Admin',
            'get_data'  => $this->db->get_where('user', ['id' => $id])->row_array(),
            'get_user'  => $this->m_user->get_user(),
            'isi'       => 'belakang/users/edit_user'
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[conf_password]');
        $this->form_validation->set_rules('conf_password', 'Konfirmasi Password', 'trim|required|min_length[6]|matches[password]');
        $this->form_validation->set_rules('no_hp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            $this->m_user->edit_user();
        }
    }

    public function hapus_user($id)
    {
        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');

        redirect('belakang/user');
    }
}

/* End of file User.php */