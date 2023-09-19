<?php
class About extends Controller
{
    public function index($nama = 'Faldy', $pekerjaan = 'Web Developer')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = "About";
        $this->view('templates/head', $data);
        $this->view('about/index', $data);
        $this->view('templates/foot');
    }

    public function page()
    {
        $data['judul'] = "Pages";
        $this->view('templates/head', $data);
        $this->view('about/page');
        $this->view('templates/foot');
    }
}
