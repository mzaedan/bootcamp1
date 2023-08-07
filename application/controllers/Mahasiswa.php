<?php


class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mahasiswa');
    }

    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['judul'] = 'Bootcamp STIMIK-MI';
        $data['mahasiswa'] = $this->M_mahasiswa->get_data();
        $this->load->view('dashboard/css');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/js');
        $this->load->view('mahasiswa/mahasiswa', $data);
    }

    public function add()
    {
        $data['title'] = 'Mahasiswa';
        $data['judul'] = 'Bootcamp STIMIK-MI';
        $data['mahasiswa'] = $this->M_mahasiswa->get_data();
        $this->load->view('dashboard/css');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/js');
        $this->load->view('mahasiswa/add', $data);
    }
}
