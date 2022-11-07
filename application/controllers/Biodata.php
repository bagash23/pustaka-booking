<?php

class Biodata extends CI_Controller
{

    public function index()
    {
        $this->load->view('form-biodata');
    }

    public function cetak()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'jenis' => $this->input->post('jenis')
        ];
        $this->load->view('data-biodata', $data);
    }
}
