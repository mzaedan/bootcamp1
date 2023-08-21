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
        $data['mahasiswa'] = $this->M_mahasiswa->getAllKuesioner();
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

    public function save_aksi()
    {
        $nim_mhs = $this->input->post('nim_mhs');
        $nama_mhs = $this->input->post('nama_mhs');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $agama = $this->input->post('agama');

        $gambar_mhs = $_FILES['gambar'];

        if ($gambar_mhs = '') {
        } else {
            $config['upload_path'] = './assets/images/gambar/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gagal Upload !";
                die();
            } else {
                $gambar_mhs = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nim_mhs' => $nim_mhs,
            'nama_mahasiswa' => $nama_mhs,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'email' => $email,
            'telepon' => $telepon,
            'agama' => $agama,
            'gambar' => $gambar_mhs
        );

        $this->M_mahasiswa->input_data($data);
        redirect('mahasiswa');
    }

    public function update()
    {
        $id = $this->uri->segment(3);
        $data['row'] = $this->M_mahasiswa->getRow($id);

        $this->load->view('dashboard/css');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/js');
        $this->load->view('mahasiswa/update', $data);
    }

    public function update_aksi()
    {
        $id = $this->input->post('id');
        $nim_mhs = $this->input->post('nim_mhs');
        $nama_mhs = $this->input->post('nama_mhs');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $agama = $this->input->post('agama');

        $gambar_mhs = $_FILES['gambar'];

        if ($gambar_mhs = '') {
        } else {
            $config['upload_path'] = './assets/images/gambar/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $userfile = $this->upload->data('file_name');
                $this->db->set('gambar', $userfile);
            } else {
                echo "Gagal upload";
            }
        }

        $data = array(
            'nim_mhs' => $nim_mhs,
            'nama_mahasiswa' => $nama_mhs,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'email' => $email,
            'telepon' => $telepon,
            'agama' => $agama,
            'gambar' => $gambar_mhs
        );

        $this->M_mahasiswa->update_data($data);
        redirect('mahasiswa');
    }

    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $this->M_mahasiswa->delete_data($id);
        redirect('mahasiswa');
    }
}
