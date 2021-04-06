<<?php  
class Sno3 extends CI_Controller {
  public function index() {
    $this->load->model('Sno3_model');
    $model = $this->No3_model;
    $a = $model->txt;
    $data['teks'] = $a;
    $this->load->view('sno3/index', $data);
  }
}