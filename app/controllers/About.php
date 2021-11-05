<?php
class About extends Controller {
    public function index($nama="Muhamad Ridwan",$pekerjaan= "Mahasiswa Teknik Elektro",$umur = 23)  {
        $data['judul'] = 'Halaman About';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('template/headers',$data);
        $this->view('about/index',$data);
        $this->view('template/footers');
    }
    public function page() {
        $data['judul'] = 'Halaman Pages';
        $this->view('template/headers',$data);
        $this->view('about/page');
        $this->view('template/footers');
    }
}