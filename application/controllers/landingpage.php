<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{

   public function index()
   {
      $this->load->view('templates/header');
      $this->load->view('landingpage/view');
      $this->load->view('templates/footer');
   }
}
