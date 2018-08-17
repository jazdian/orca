<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{


   public function index()
   {

      $this->load->model('test_model');
      $this->load->database();

      $data['alumnos'] = $this->test_model->get_ten_alumnos();

      $this->load->view('test.php', $data);
   }

}
