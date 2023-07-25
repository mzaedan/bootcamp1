<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('dashboard/css');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/js');
        $this->load->view('dashboard/index');
    }
}
