<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{
  public function index()
  {
    $this->form_validation->set_rules('nama','Nama Pembeli','required',
    ['required' ⇒ 'Nama Pembeli harus di isi']);
    $this->form_validation->set_rules('nhp','Nomer HP','required',
    ['required' ⇒ 'Nomer HP harus di isi']);
    if ($this->form_validation->run() = false) {
      $data['merk'] = ['Nike','Adidas','Kickers','Eiger','Bucherri'];
      $this->load->view('review/v_input',$data);
    } else {
      var_dump($_POST);
      die;
    }
  }
}