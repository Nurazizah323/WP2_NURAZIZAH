<?php
defined('BASEPATH') or exit('No direct script access allowed');

 class TokoSepatu extends CI_Controller
{
  public function index()
  {
    $data['merk'] = ['Nike','Adidas','Kickers','Eiger','Bucherri'];
    $this->load->view('review/v_input',$data);
  }
}