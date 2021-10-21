<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{
  public function index()
  {
    $this->load->view('review/v_input');
  }
}