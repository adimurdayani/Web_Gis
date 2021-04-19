<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_maskin extends CI_Model
{

    public function add_maskin()
    {
        # code...
        $no_kk = htmlspecialchars($this->input->post('no_kk', true));
        $nama = htmlspecialchars($this->input->post('nama', true));
        $alamat = htmlspecialchars($this->input->post('alamat', true));
        $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin', true));
        $pekerjaan = htmlspecialchars($this->input->post('pekerjaan', true));
        $tanggungan = htmlspecialchars($this->input->post('tanggungan', true));
        $luas_rumah = htmlspecialchars($this->input->post('luas_rumah', true));
        $latitude = htmlspecialchars($this->input->post('latitude', true));
        $longtitude = htmlspecialchars($this->input->post('longitude', true));
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        #proses insert data
        $this->db->set('no_kk', $no_kk);
        $this->db->set('nama', $nama);
        $this->db->set('alamat', $alamat);
        $this->db->set('jenis_kelamin', $jenis_kelamin);
        $this->db->set('pekerjaan', $pekerjaan);
        $this->db->set('tanggungan', $tanggungan);
        $this->db->set('luas_rumah', $luas_rumah);
        $this->db->set('latitude', $latitude);
        $this->db->set('longitude', $longtitude);
        $this->db->insert('maskin');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
        redirect('belakang/maskin/tbh_maskin');
    }

    public function edit_maskin()
    {
        # code...
        $id = $this->input->post('id');
        $no_kk = htmlspecialchars($this->input->post('no_kk', true));
        $nama = htmlspecialchars($this->input->post('nama', true));
        $alamat = htmlspecialchars($this->input->post('alamat', true));
        $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin', true));
        $pekerjaan = htmlspecialchars($this->input->post('pekerjaan', true));
        $tanggungan = htmlspecialchars($this->input->post('tanggungan', true));
        $luas_rumah = htmlspecialchars($this->input->post('luas_rumah', true));
        $latitude = htmlspecialchars($this->input->post('latitude', true));
        $longtitude = htmlspecialchars($this->input->post('longitude', true));
        $gambar = $_FILES['gambar']['name'];
        #proses insert data
        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        #proses insert data
        $this->db->where('id', $id);
        $this->db->set('no_kk', $no_kk);
        $this->db->set('nama', $nama);
        $this->db->set('alamat', $alamat);
        $this->db->set('jenis_kelamin', $jenis_kelamin);
        $this->db->set('pekerjaan', $pekerjaan);
        $this->db->set('tanggungan', $tanggungan);
        $this->db->set('luas_rumah', $luas_rumah);
        $this->db->set('latitude', $latitude);
        $this->db->set('longitude', $longtitude);
        $this->db->update('maskin');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
        redirect('belakang/maskin');
    }

    public function get_maskin($id)
    {
        # code...
        return $this->db->get_where('maskin', ['id' => $id])->row_array();
    }

    public function get_jumlah()
    {
        return $this->db->get('maskin')->num_rows();
    }

    public function get_jumlah_user()
    {
        return $this->db->get('user')->num_rows();
    }

    public function get_jumlah_pesan()
    {
        return $this->db->get('pesan')->num_rows();
    }
    public function get_jumlah_administrasi()
    {
        return $this->db->get('p_administrasi')->num_rows();
    }

    public function get_persebaran()
    {
        return $this->db->get('p_persebaran')->num_rows();
    }
}

/* End of file M_maskin.php */