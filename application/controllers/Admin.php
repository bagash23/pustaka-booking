<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $this->load->view('page/template/header', $data);
        $this->load->view('page/template/sidebar', $data);
        $this->load->view('page/template/topbar', $data);
        $this->load->view('page/admin/index', $data);
        $this->load->view('page/template/footer');
    }
}
