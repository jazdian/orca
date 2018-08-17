<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller{


    public function index()
    {

        $data['route'] = 'admin';

        $this->load->view('admin/index.php');
        $this->load->view('admin/index_left_panel.php');
        $this->load->view('admin/index_rigth_panel.php', $data);
        $this->load->view('admin/index_end.php');

    }
    
}