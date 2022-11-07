<?php

class InputSiswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('form-Siswa');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'lahir' => $this->input->post('lahir'),
            'tempat' => $this->input->post('tempat'),
            'alamat' => $this->input->post('alamat'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama'),
        ];
        $this->load->view('data-siswa', $data);
    }
}
