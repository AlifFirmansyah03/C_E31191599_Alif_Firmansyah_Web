<?php

class Demo_view extends CI_Controller {
  public function index()
  {
    $this->load->view('kode1/headerview');
    $this->load->view('kode1/contentview');
    $this->load->view('kode1/footerview');
  }
}