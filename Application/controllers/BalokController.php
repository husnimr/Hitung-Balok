// application/controllers/BalokController.php

<?php
class BalokController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BalokModel');
    }

    public function index() {
        $this->load->view('hitung_luas_balok');
    }

    public function hitung_luas() {
        $panjang = $this->input->post('panjang');
        $lebar = $this->input->post('lebar');
        $tinggi = $this->input->post('tinggi');

        $luas = 2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);

        $data = array(
            'panjang' => $panjang,
            'lebar' => $lebar,
            'tinggi' => $tinggi,
            'luas' => $luas
        );

        $hasil_id = $this->BalokModel->simpan_hasil($data);

        $data['hasil'] = $this->BalokModel->get_hasil_by_id($hasil_id);

        $this->load->view('hitung_luas_balok', $data);
    }
}
