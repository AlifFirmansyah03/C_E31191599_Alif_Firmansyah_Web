<?php

class Sno4 extends CI_Controller {
  public function index() {
    $this->load->model('Sno4_model');
    $model = $this->Sno4_model;
    $data = [
      'nim' => $model->nim,
      'nama' => $model->nama,
      'jurusan' => $model->jurusan,
      'prodi' => $model->prodi,
      'kotaAsal' => $model->kotaAsal
    ];
    $this->load->view('sno4/index', $data);
  }
}