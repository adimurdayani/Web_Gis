<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul' => 'Login | Halaman Login Admin',
            'isi'   => 'login/login'
        ];

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_login/wraper', $data, FALSE);
        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            # code...
            if ($user['user_aktif'] == 1) {
                # code...
                if (password_verify($password, $user['password'])) {
                    # code...
                    $data = [
                        'email' => $user['email'],
                        'user_level' => $user['user_level']

                    ];

                    $this->session->set_userdata($data);

                    if ($user['user_level'] == 'Admin') {
                        # code...
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin</div>');
                        redirect('belakang/dashboard');
                    } else {

                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah</div>');
                    redirect('login/login');
                }
            } else {
                # code...
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum di aktivasi</div>');
                redirect('login/login');
            }
        } else {
            # code...
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
            redirect('login/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_level');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah berhasil logout!</div>');
        redirect('login/login');
    }
}

/* End of file Login.php */