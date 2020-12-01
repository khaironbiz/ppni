<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Anggota Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Anggota_model', 'anggota');

        $data['anggota'] = $this->anggota->getAnggota();
        $data['provinsi'] = $this->db->get('prov')->result_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->load->view('focus/layout/header', $data);
        $this->load->view('focus/layout/navbar', $data);
        $this->load->view('focus/layout/topbar', $data);
        $this->load->view('focus/anggota/all', $data);
        $this->load->view('focus/layout/footer');
    }
    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Anggota_model', 'anggota');
        $dpw                = $data['user']['dpw'];
        $provinsi           = $data['user']['prov'];
        $kota               = $data['user']['kota'];
        $kec                = $data['user']['kec'];
        $desa               = $data['user']['kel'];
        $data['anggota']    = $this->anggota->getAnggota();
        $data['dpw']        = $this->db->get_where('prov', ['id_prov' => $dpw])->row_array();
        $data['prov']       = $this->db->get_where('prov', ['id_prov' => $provinsi])->row_array();
        $data['kota']       = $this->db->get_where('kabkot', ['id_kabkot' => $kota])->row_array();
        $data['kec']        = $this->db->get_where('kec', ['id_kec' => $kec])->row_array();
        $data['desa']       = $this->db->get_where('desa', ['desaId' => $desa])->row_array();


        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->load->view('focus/layout/header', $data);
        $this->load->view('focus/layout/navbar', $data);
        $this->load->view('focus/layout/topbar', $data);
        $this->load->view('focus/anggota/profile', $data);
        $this->load->view('focus/layout/footer');
    }
}
