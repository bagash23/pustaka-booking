<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            // 'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                // 'min_lenght' => 'Kode terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            // 'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                // 'min_lenght' => 'Nama terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'jenis',
            'Jenis Kelamin',
            // 'required|min_length[3]',
            [
                'required' => 'Jenis Kelamin Harus diisi',
                // 'min_lenght' => 'Jenis terlalu pendek'
            ]
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis')
            ];
            $this->load->view('data-matakuliah', $data);
        }
    }
}
