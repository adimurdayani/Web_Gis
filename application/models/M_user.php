<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{


    public function tbh_user()
    {
        $nama = $this->input->post('nama');
        $email = htmlspecialchars($this->input->post('email'), true);
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $no_hp = $this->input->post('no_hp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $user_level = $this->input->post('user_level');
        $user_aktif = 1;
        $alamat = $this->input->post('alamat');
        $pendidikan = $this->input->post('pendidikan');
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/profil/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->set('nama', $nama);
        $this->db->set('email', $email);
        $this->db->set('password', $password);
        $this->db->set('no_hp', $no_hp);
        $this->db->set('jenis_kelamin', $jenis_kelamin);
        $this->db->set('user_level', $user_level);
        $this->db->set('user_aktif', $user_aktif);
        $this->db->set('alamat', $alamat);
        $this->db->set('pendidikan', $pendidikan);
        $this->db->insert('user');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
        redirect('belakang/user');
    }

    public function edit_user()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = htmlspecialchars($this->input->post('email'), true);
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $no_hp = $this->input->post('no_hp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $user_level = $this->input->post('user_level');
        $user_aktif = 1;
        $alamat = $this->input->post('alamat');
        $pendidikan = $this->input->post('pendidikan');
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/profil/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->where('id', $id);
        $this->db->set('nama', $nama);
        $this->db->set('email', $email);
        $this->db->set('password', $password);
        $this->db->set('no_hp', $no_hp);
        $this->db->set('jenis_kelamin', $jenis_kelamin);
        $this->db->set('user_level', $user_level);
        $this->db->set('user_aktif', $user_aktif);
        $this->db->set('alamat', $alamat);
        $this->db->set('pendidikan', $pendidikan);
        $this->db->update('user');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
        redirect('belakang/user');
    }

    public function get_data($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function get_user()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
}

/* End of file M_user.php */