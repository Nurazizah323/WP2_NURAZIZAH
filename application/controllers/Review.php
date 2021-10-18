<?php
defined('BASEPATH') or exit('No direct script access allowed');

 class TokoSepatu extends CI_Controller
{
  public function index()
  {
    $this->load->view('TokoSepatu/TokoSepatu_input');
  }
}